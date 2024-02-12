<x-app-layout>
    <div>
        <div class="text-center text-3xl p-3">
            {{$maintext->name}}
        </div>
        <div>
            {!!$maintext->body!!}
        </div>
    </div>
</x-app-layout>