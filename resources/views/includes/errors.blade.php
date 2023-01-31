<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    @foreach ($errors->all() as $row)
        @php
            $row = explode(',', $row);
        @endphp
        toastr.{{ $row[0] }}("{{ $row[1] }}");
    @endforeach


    $('.menu-link').each(function () {
        if ($(this).data('route') === "{{ Route::currentRouteName() }}") {
            $(this).addClass('active');
        }
    });

    @php $perms = tr_group_permission(tr_user_details(null, 'group_id')) @endphp
    @foreach(json_decode($perms, true) as $key2 => $value2)
        @if($key2 == "add_sale_access")
            @if($value2 == true)
                $('#satis_ekle_form').submit(function (e) {
                    e.preventDefault();
                    $.ajax({
                        method: 'POST',
                        url: '{{ route('ajax.add_sale') }}',
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.status === 'success') {
                                toastr.success(response.message);
                                $(this).reset();
                            } else {
                                toastr.error(response.message);
                                $(this).reset();
                            }
                        },
                    });
                });
            @else
                @if(tr_user_permission_check(null, "add_sale_access") == true)
                    $('#satis_ekle_form').submit(function (e) {
                        e.preventDefault();
                        $.ajax({
                            method: 'POST',
                            url: '{{ route('ajax.add_sale') }}',
                            data: $(this).serialize(),
                            success: function (response) {
                                if (response.status === 'success') {
                                    toastr.success(response.message);
                                    $(this).reset();

                                } else {
                                    toastr.error(response.message);
                                    $(this).reset();

                                }
                            },
                        });
                    });
               @endif
            @endif
        @endif
    @endforeach


    function timeToString(time) {
        let diffInHrs = time / 3600000;
        let hh = Math.floor(diffInHrs);

        let diffInMin = (diffInHrs - hh) * 60;
        let mm = Math.floor(diffInMin);

        let diffInSec = (diffInMin - mm) * 60;
        let ss = Math.floor(diffInSec);

        let diffInMs = (diffInSec - ss) * 100;
        let ms = Math.floor(diffInMs);

        let formattedHH = hh.toString().padStart(2, "0");
        let formattedMM = mm.toString().padStart(2, "0");
        let formattedSS = ss.toString().padStart(2, "0");
        let formattedMS = ms.toString().padStart(2, "0");

        if (formattedMM > 15) {
            $('#display').addClass('text-danger');
        }

        return `${formattedHH}:${formattedMM}:${formattedSS}`;
    }

    let startTime;
    let elapsedTime = 0;
    let timerInterval;

    function print(txt) {
        document.getElementById("display").innerHTML = txt;
    }

    function start() {
        startTime = Date.now() - elapsedTime;
        timerInterval = setInterval(function printTime() {
            elapsedTime = Date.now() - startTime;
            print(timeToString(elapsedTime));
        }, 10);
        showButton("PAUSE");
        $('#display').removeClass('text-danger');
    }

    @php
        $pause = \App\Models\Pause::query()->where(['user_id' => Auth::user()->id, 'end_date' => null, 'status' => 'active'])->first();
        $time_in_ms = null;
        if ($pause)
        {
            $yourdate = $pause->start_date;
            $stamp = strtotime($yourdate); // get unix timestamp
            $time_in_ms = $stamp*1000;
        }
    @endphp

    function resume() {
        startTime = {{ $time_in_ms }} - elapsedTime;
        timerInterval = setInterval(function printTime() {
            elapsedTime = Date.now() - startTime;
            print(timeToString(elapsedTime));
        }, 10);
        showButton("PAUSE");
    }

    function pause() {
        clearInterval(timerInterval);
        showButton("PLAY");
    }

    function reset() {
        clearInterval(timerInterval);
        print("00:00:00");
        elapsedTime = 0;
        showButton("PLAY");
        $('#display').removeClass('text-danger');
    }

    function showButton(buttonKey) {
        const buttonToShow = buttonKey === "PLAY" ? break_button : end_button;
        const buttonToHide = buttonKey === "PLAY" ? end_button : break_button;
        buttonToShow.style.display = "block";
        buttonToHide.style.display = "none";
    }

    let break_button = document.getElementById("start_timer");
    let end_button = document.getElementById("stop_timer");

    $('#start_timer').click(function () {
        $(this).toggleClass('d-none');
        $('#stop_timer').toggleClass('d-none');
        $.ajax({
            method: 'POST',
            url: '{{ route('ajax.start_pause') }}',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                if (response.status === 'success') {
                    start();
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
            },
        });
    });

    $('#stop_timer').click(function () {
        $(this).toggleClass('d-none');
        $('#start_timer').toggleClass('d-none');
        $.ajax({
            method: 'POST',
            url: '{{ route('ajax.end_pause') }}',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                if (response.status === 'success') {
                    reset();
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
            },
        });
    });

    $(document).ready(function () {
        @if ($pause)
            $('#start_timer').toggleClass('d-none');
            $('#stop_timer').toggleClass('d-none');
            resume();
        @endif
    });

</script>
