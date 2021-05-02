<div class="header">
    <div class="w33"><a href="{{ route('requests') }}" class="headLinks  @if(request()->route()->getName() == 'requests') active @endif">Requests (<span>{{ $tabBooks->where('status',0)->count() }}</span>)</a></div>
    <div class="w33"><a href="{{ route('services') }}" class="headLinks @if(request()->route()->getName() == 'services') active @endif">Services (<span>{{ $tabBooks->where('status',1)->count() }}</span>)</a></div>
    <div class="w33"><a href="{{ route('payments') }}" class="headLinks @if(request()->route()->getName() == 'payments') active @endif">Payments (<span>{{ $tabBooks->where('status',2)->count() }}</span>)</a></div>
</div>