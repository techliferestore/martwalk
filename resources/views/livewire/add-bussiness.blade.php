@include('include.dashboard-menu')

@include('livewire.bussiness-menu')




@if($services)

@include('livewire.services-bussiness')

@elseif($about)
@include('livewire.about-bussiness')

@elseif($social)
@include('livewire.social')


@elseif($gallery)

@include('livewire.gallery')

@elseif($timing)

@include('livewire.timing')


@else($bussiness)

@include('livewire.edit-bussiness')





@endif


                        <!-- pagination-->




