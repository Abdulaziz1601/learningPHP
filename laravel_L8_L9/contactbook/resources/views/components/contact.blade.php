<div class="contact">
    <div class="topRightCorner">
        <a href="" class="delete">x</a>
    </div>
    <dl>
        <dt>Name:</dt>
        <dd>{{ $contact['fullname'] }}</dd>
        <dt>Email:</dt>
        <dd>{{ $contact['email'] }}</dd>
        <dt>Category:</dt>
        {{-- Laravel object, has helper function join --}}
        <dd>{{ $contact['categories']->join(',') }}</dd>
    </dl>
    <ul>
        <li>
            <form action="" method="post">
                <input type="text" name="note" id="note">
                <input type="submit" value="Add Note">
            </form>
        </li>

        @foreach($contact['notes'] as $note)
            <li><a href="" class="delete">x</a>{{$note}}</li>
        @endforeach
    </ul>
</div>
