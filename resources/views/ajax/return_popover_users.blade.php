@if($users['users']['from'])
    <strong>Düzenleyenler:</strong>
    @foreach($users['users']['from'] as $key => $value)
        {{ tr_user_fullname($value) }},
    @endforeach
@endif
@if($users['users']['to'])
    <br><strong>Katılımcılar:</strong>
    @foreach($users['users']['to'] as $key => $value)
        {{ tr_user_fullname($value) }},
    @endforeach
@endif
