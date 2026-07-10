@props(['title' => 'No data found', 'description' => 'Try adjusting your filters or search terms.', 'icon' => null])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center text-center p-8 border border-dashed rounded-2xl bg-white/40 dark:bg-neutral-900/40']) }} style="border-color: var(--border-color);">
    @if($icon)
        <div class="mb-4 text-muted-foreground">{{ $icon }}</div>
    @else
        <div class="mb-4 text-muted-foreground">
            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="m15 9-6 6m0-6 6 6"/></svg>
        </div>
    @endif
    <h3 class="font-bold text-lg text-foreground">{{ $title }}</h3>
    <p class="text-muted-foreground text-sm mt-1 max-w-sm">{{ $description }}</p>
    @if(isset($action))
        <div class="mt-5">{{ $action }}</div>
    @endif
</div>