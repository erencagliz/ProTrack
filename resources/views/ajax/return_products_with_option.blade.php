@foreach($products as $row)
    <option value="{{ $row->id }}" data-point="{{ $row->point }}" data-project="{{ $row->project_id }}">{{ $row->name }} ({{ $row->title }})</option>
@endforeach
