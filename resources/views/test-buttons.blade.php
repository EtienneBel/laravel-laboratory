<!DOCTYPE html>
<html>
<head>
    <title>Button Test Page</title>
    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Include Livewire Styles -->
    @livewireStyles

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="p-8">
    <div>
        <h1 class="mb-6 text-2xl font-bold">Button Component Test</h1>

        <!-- Basic Buttons -->
        <div class="mb-8">
            <h2 class="mb-4 text-xl font-semibold">Basic Buttons</h2>
            <div class="space-x-4">
                <livewire:button label="Regular Button" variant="primary" />
                <livewire:button label="Save Document" variant="success" icon="fas fa-save" />
                <livewire:button label="Delete Item" variant="danger" />
                <livewire:button label="Warning" variant="warning" />
            </div>
        </div>

        <!-- Button Sizes -->
        <div class="mb-8">
            <h2 class="mb-4 text-xl font-semibold">Button Sizes</h2>
            <div class="space-x-4">
                <livewire:button label="Small Button" variant="primary" size="sm" />
                <livewire:button label="Medium Button" variant="primary" size="md" />
                <livewire:button label="Large Button" variant="primary" size="lg" />
            </div>
        </div>

        <!-- Loading State -->
        <div class="mb-8">
            <h2 class="mb-4 text-xl font-semibold">Loading State</h2>
            <div class="space-x-4">
                <livewire:button
                    label="Click to Load"
                    variant="primary"
                    :loading="true"
                    loading-text="Loading..."
                />
            </div>
        </div>

        <!-- Icons -->
        <div class="mb-8">
            <h2 class="mb-4 text-xl font-semibold">Buttons with Icons</h2>
            <div class="space-x-4">
                <livewire:button label="Edit" variant="primary" icon="fas fa-edit" />
                <livewire:button label="Delete" variant="danger" icon="fas fa-trash" />
                <livewire:button label="Settings" variant="secondary" icon="fas fa-cog" />
            </div>
        </div>

        <!-- Disabled State -->
        <div class="mb-8">
            <h2 class="mb-4 text-xl font-semibold">Disabled State</h2>
            <div class="space-x-4">
                <livewire:button
                    label="Disabled Button"
                    variant="primary"
                    :disabled="true"
                />
            </div>
        </div>
    </div>

    <!-- Include Livewire Scripts -->
    @livewireScripts
</body>
</html>
