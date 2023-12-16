
    <div class="container">
        <div class="row">
            <h1>{{__('ui.request')}}</h1>
            <h2>{{__('ui.datas')}}</h2>
            <p>{{__('ui.auditor_name')}} {{ $user->name }}</p>
            <p>{{__('ui.auditor_email')}} {{ $user->email }}</p>
            <p>{{__('ui.auditor_motivation')}} {{$motivation}}</p>
            <p>{{__('ui.auditor_hiring')}} </p>
            <a href="{{ route('makeRevisor', compact('user')) }}">{{__('ui.make_auditor')}}</a>
        </div>
    </div>
