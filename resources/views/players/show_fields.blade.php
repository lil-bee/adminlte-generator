<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $player->Name }}</p>
</div>

<!-- Position Field -->
<div class="col-sm-12">
    {!! Form::label('Position', 'Position:') !!}
    <p>{{ $player->Position }}</p>
</div>

<!-- Shirt Number Field -->
<div class="col-sm-12">
    {!! Form::label('Shirt_Number', 'Shirt Number:') !!}
    <p>{{ $player->Shirt_Number }}</p>
</div>

<!-- Nationality Field -->
<div class="col-sm-12">
    {!! Form::label('Nationality', 'Nationality:') !!}
    <p>{{ $player->Nationality }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $player->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $player->updated_at }}</p>
</div>

