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
            </div>
        </div>
    </div>

    {{--    start mission--}}
    <div class="container px-4 px-lg-5 pt-5 mb-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-8 col-sm-7">
                <div class="">
                    <h2 class="text-start mt-0">
                        About Us
                        <hr class="divider-mission">
                    </h2>
                </div>
                <div class="mt-5 ">
                    <p class="text-muted mb-0 text-justify" style="font-size: 1.2rem">We are to help people explore and
                        discover the
                        history of everything in the
                        world, from nations to cultures, from ancient artifacts to arts and sports.</p>
                    <p class="text-muted mb-0 text-justify" style="font-size: 1.2rem; font-weight: lighter">We respect
                        the
                        diversity and richness of history. We are committed to delivering reliable and engaging
                        information to our users. We encourage learning and interaction within the historical
                        community.</p>
                    <p class="text-muted mb-0 text-justify" style="font-size: 1.2rem">We regularly organize historical
                        exhibitions to
                        provide an exciting learning experience for everyone. Additionally, we offer opportunities for
                        readers to contribute articles on history and share their knowledge with the community.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-5">
                <div class="px-3 py-2 about-border" style="position: relative">
                    <hr class="divider-post">
                    <h4 class="text-capitalize">Popular post</h4>
                </div>
                <div class="">
                    <ul class="list-group">
                        <li class="list-group-item w-full">
                            <div class="w-25" style="display: flex">
                                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition.jpg')}}"
                                     alt="exhibition_1">

                            </div>
                            <p class="ml-1">Exhibition 1 in Korea</p>
                        </li>

                        <li class="list-group-item w-full">
                            <div class="w-25" style="display: flex">
                                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition.jpg')}}"
                                     alt="exhibition_1">

                            </div>
                            <p class="ml-1">Exhibition 1 in Korea</p>
                        </li>

                        <li class="list-group-item w-full">
                            <div class="w-25" style="display: flex">
                                <img class="history-exhibition-img" src="{{asset('/images/history_exhibition.jpg')}}"
                                     alt="exhibition_1">

                            </div>
                            <p class="ml-1">Exhibition 1 in Korea</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    {{--    end mission--}}


@endsection
