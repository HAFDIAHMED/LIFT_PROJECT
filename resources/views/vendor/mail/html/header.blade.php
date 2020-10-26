<tr>
    <td class="header">
        <a href="{!!  config("app.url") !!}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{asset("images/LOGOEasyLift.jpg")}}" class="logo" alt="{{config("app.name")}}">
            @else
                {!! $slot !!}
            @endif
        </a>
    </td>
</tr>
