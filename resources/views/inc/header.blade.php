<header class="bg-dark d-flex justify-content-between p-4">
    <div class="text-light">
        <h3>
            <a href="{{ route('contacts.index') }}" class="text-light text-decoration-none"> Cotact Management System</a>
        </h3>
    </div>
    <div class="d-flex gap-1">
        <a href="{{ route('contacts.index') }}" class="btn text-light">All Contact </a>
        <a href="{{ route('contacts.create') }}" class="btn text-light">Add Contact </a>
    </div>
</header>
