<x-layouts.main>
    <x-slot:title>
        Notifications
    </x-slot:title>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Notifications</h6>
                    <h1 class="section-title mb-3">Notifications</h1>
                </div>
            </div>
            @foreach ($notifications as $notification)
                <div class="border mb-3 p-4 rounded">
                    <div class="position-relative mb-4">
                        @if ($notification->read_at == null)
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">New</h4>
                            </div>
                        @else
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">
                                    <i class="fas fa-check-double"></i>
                                </h4>
                            </div>
                        @endif
                    </div>
                    <a class="bg-secondary font-weight-medium px-2 py-1 text-white rounded">
                        {{ $notification->data['created_at'] }}</a>
                    <h5 class="font-weight-medium mb-2">{{ $notification->data['title'] }}</h5>
                    <p class="mb-4">{{ 'Created new Post. Post id = ' . $notification->data['id'] }}</p>
                    @if ($notification->read_at == null)
                        <a class="btn btn-sm btn-primary py-2"
                            href="{{ route('notifications.read', ['notification' => $notification->id]) }}">
                            Mark as read
                        </a>
                    @endif
                </div>
            @endforeach
            {{ $notifications->links() }}
        </div>
    </div>
    <!-- Blog End -->
</x-layouts.main>
