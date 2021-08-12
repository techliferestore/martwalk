
@include('livewire.dashboard-menu')


@if($review)
@include('livewire.review')


@elseif($bussiness)

@include('livewire.add-bussiness')


@elseif($booking)

@include('livewire.booking')

@elseif('$profile')

@include('livewire.profile')


@endif
