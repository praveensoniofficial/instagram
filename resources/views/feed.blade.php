@extends('main')

@section('content')

<main class="row py-5 d-flex justify-content-center">
    <div class="col">
        <div class="py-3">
            <div class="container justify-content-center d-flex col-md-12 mt-2 mb-4">
            <div class="card box-shadow">
                <div
                class="card-header d-flex justify-content-between align-items-center"
                >
                <div class="user-profile">
                    <div class="media">
                    <img
                        class="mr-3"
                        data-src="holder.js/30x30?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Generic placeholder image"
                        style="border-radius: 100%;"
                    />
                    <div class="media-body">
                        <h5 class="mt-1">Username</h5>
                    </div>
                    </div>
                </div>
                <div class="menu">
                    <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-three-dots-vertical"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"
                    />
                    </svg>
                </div>
                </div>
                <img
                class="card-img-left"
                data-src="holder.js/100px500?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                alt="Card image cap"
                />
                <div class="card-body">
                <div class="row">
                    <div class="d-block px-3" style="display:inline">
                        <span style="font-weight: bold;">Username</span>
                        <span>This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a
                        little bit longer.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 px-3 text-muted">
                    View all 123 comments
                    </div>
                </div>
                </div>
                <div class="card-footer text-muted py-0">
                <div class="row justify-content-around d-flex pb-2">
                    <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-heart"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                    />
                    </svg>
                    <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-chat"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"
                    />
                    </svg>
                    <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-share"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M11.724 3.947l-7 3.5-.448-.894 7-3.5.448.894zm-.448 9l-7-3.5.448-.894 7 3.5-.448.894z"
                    />
                    <path
                        fill-rule="evenodd"
                        d="M13.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-6.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"
                    />
                    </svg>
                    <!-- <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-heart-fill"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"
                    />
                    </svg> -->
                    <svg
                    aria-label="Save"
                    class="text-muted"
                    fill="#262626"
                    viewBox="0 0 48 48"
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    >
                    <path
                        d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"
                    ></path>
                    </svg>
                </div>
                <div class="row border-top">
                    <input
                    type="text"
                    class="border-0"
                    placeholder="Add a comment..."
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>

@endsection('content')