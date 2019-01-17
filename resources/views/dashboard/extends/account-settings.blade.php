<ul>
    <li class="no-padding">
        <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>صندوق ورودی</a>
    </li>
    <li class="no-padding">
        <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>مهم ها<span class="new badge">18</span></a>
    </li>
    <li class="no-padding">
        <a class="waves-effect waves-grey"><i class="material-icons">done</i>ارسال شده</a>
    </li>
    <li class="no-padding">
        <a class="waves-effect waves-grey"><i class="material-icons">history</i>تاریخچه</a>
    </li>
    <li class="divider"></li>
    <li class="no-padding">
        <a class="waves-effect waves-grey" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
            <i class="material-icons">exit_to_app</i>خروج</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
