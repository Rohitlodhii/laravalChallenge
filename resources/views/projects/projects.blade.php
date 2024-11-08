<x-layout>
    <div class="max-w-lg flex flex-col gap-4 mx-auto  p-4 md:p-0">

    
        <div class="flex items-center justify-evenly mt-8">
            <div class="flex gap-4">
                <a class="transition ease-in hover:underline font-medium" href="/">Home</a>
               
            </div>
            <div class="flex gap-2">
                <a href="https://github.com/rohitlodhii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/github.png" alt="github"/>
                  </a>
                  <a href="https://linkedin.com/in/rohitlodhiii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-filled/50/linkedin.png" alt="linkedin"/>
                  </a>
                  <a href="https://instagram.com/rohitlodhiii" target="_blank">
                    <img class="cursor-pointer" width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/instagram-new.png" alt="instagram-new"/>
                  </a>
                  
            </div>
        </div>

        <div class="h-[2px] bg-neutral-500/30 w-full my-4 "></div>

    <h1 class="md:text-4xl text-2xl font-bold   ">GitHub Projects</h1>

    @if(isset($error))
        <div class="error">{{ $error }}</div>
    @else
        <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
            @foreach($projects as $project)
                <div class="border border-zinc-500 bg-zinc-200 flex items-center justify-around   rounded-md py-2">
                    <div class="font-semibold ">{{ $project['name'] }}</div>
                    <a href="{{ $project['html_url'] }}">
                    <div class="bg-zinc-900 text-white  px-4 py-1 rounded-lg ">Link</div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

</div>
</x-layout>




