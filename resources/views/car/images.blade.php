<x-app-layout bodyClass="page-my-cars">
    <main>
        <div>
            <div class="container">
                <h1 class="car-details-page-title">Manage images for {{ $car->getTitle() }}</h1>
                <div class="card p-medium">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Delete</th>
                                <th>Image</th>
                                <th>Position</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($car->images as $image)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img
                                        src="{{ $image->getUrl() }}"
                                        alt=""
                                        class="my-cars-img-thumbnail"
                                    />
                                </td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center p-large">
                                    You don't have any cars yet. <a href="{{ route('car.create') }}">Add new car</a>
                                </td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
