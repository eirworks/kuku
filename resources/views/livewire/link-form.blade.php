<div>
    <div>
        <input class="w-full border border-gray-500 p-2 text-lg" type="text" wire:model.defer='longUrl' placeholder="Put your URL here">
    </div>
    <div class="flex justify-center my-3">
        <button class="border border-black px-2 py-1 bg-gray-200 hover:bg-gray-300" wire:click='getShortUrl()'>Get Short URL</button>
    </div>
    <div class="text-gray-500 my-5 text-center" wire:loading>Please wait...</div>
    @if($link)
    <div>
        <div>Short URL: <a class="text-blue-500" href="{{ route('redir', ['uid' => $link['uid']]) }}">{{ route('redir', ['uid' => $link['uid']]) }}</a></div>
        <div>Original URL: <a class="text-blue-500" href="{{ $link['url'] }}">{{ $link['url'] }}</a></div>
    </div>
    @endif
</div>
