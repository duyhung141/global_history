@extends("user.layouts.app")
@section("content")
    <div class="px-4 px-lg-5 h-100 introduce mb-5" id="about">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold mb-3">Global History</h1>
                <h3 class="text-white font-bold">The Global History Library</h3>
                <hr class="divider">
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white text-opacity-75 mb-5">We are here with the mission to provide a comprehensive and
                    diverse source
                    of historical information, encompassing both national history and other aspects of history, such as
                    landmarks, artifacts, sports, and art.</p>
                <a class="btn btn-orange btn-xl" href="about">Find Out More</a>
            </div>
        </div>
    </div>

    {{--    start mission--}}
    <div class="container px-4 px-lg-5 pt-5 mb-5">
        <h2 class="text-center mt-0">Missions</h2>
        <hr class="divider-mission">
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-7 col-sm-6">
                <div class="mt-5 ">
                    <img class="img-fluid" src="{{asset('/images/history_mission.jpg')}}" alt="mission">
                </div>
            </div>
            <div class="col-lg-5 col-sm-7 text-start">
                <div class="mt-5">
                    <h4 class="h4 mb-2 fs-3 fw-semibold text-xl-left" style="font-size: 2.3rem">Our missions</h4>
                    <p class="text-muted mb-0" style="font-size: 1.2rem">Are to help people explore and discover the
                        history of everything in the
                        world, from nations to cultures, from ancient artifacts to arts and sports.</p>
                </div>
            </div>
        </div>
    </div>
    {{--    end mission--}}

    {{--    start core value--}}
    <div class="core-value py-5 mb-5">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Core values</h2>
            <hr class="divider-mission">
            <div class="text-center p-4">
                <p class="text-white mb-0" style="font-size: 1.2rem; font-weight: lighter">We respect the
                    diversity and richness of history. We are committed to delivering reliable and engaging
                    information to our users. We encourage learning and interaction within the historical
                    community.</p>
            </div>
        </div>

    </div>
    {{--    end core value--}}

    {{--    start exhibition--}}
    <div class="container px-4 px-lg-5 pt-5 mb-5">
        <h2 class="text-center mt-0">Exhibition</h2>
        <hr class="divider-mission">

        <div class="text-center px-5">
            <div class="px-5">
                <p class="text-muted mb-0" style="font-size: 1.2rem">We regularly organize historical exhibitions to
                    provide an exciting learning experience for everyone. Additionally, we offer opportunities for
                    readers to contribute articles on history and share their knowledge with the community.</p>
            </div>
        </div>
        <div class="mt-5" style="display: flex">
            <div class="w-25 ">
                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition.jpg')}}" alt="exhibition_1">
            </div>
            <div class="w-25">
                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition2.jpg')}}" alt="exhibition_2">
            </div>
            <div class="w-25">
                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition3.jpg')}}" alt="exhibition_3">
            </div>
            <div class="w-25">
                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition4.jpg')}}" alt="exhibition_4">
            </div>
        </div>

        <div class="text-center mt-5">
            <div class="">
               <a class="btn btn-orange history-btn text-white px-5 py-3">Do you want to create articles?</a>
            </div>
        </div>
    </div>
    {{--    end exhibition--}}


@endsection
