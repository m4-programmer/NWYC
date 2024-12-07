<x-guest-layout>

    <!-- Page Title -->
    <x-page-title title="Sermons" current="Sermons" image="assets/img/people/sermons.jpg" >
        <p>
            We hope that these messages will be a blessing to you.
        </p>
    </x-page-title>
  <!-- End Page Title -->

    {{-- Sermon's List --}}
    <section id="course-list" class="section courses-list">
        <x-sermons :sermons="$sermons" />
    </section>


</x-guest-layout>
