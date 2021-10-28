<div class="table-responsive">
    <table class="table" id="players-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Position</th>
        <th>Shirt Number</th>
        <th>Nationality</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->Name }}</td>
            <td>{{ $player->Position }}</td>
            <td>{{ $player->Shirt_Number }}</td>
            <td>{{ $player->Nationality }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['players.destroy', $player->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('players.show', [$player->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('players.edit', [$player->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
