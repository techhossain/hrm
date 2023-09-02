"use strict";

var mxKanban1 = new jKanban({
    element: "#mx-kanban-1",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess",
            title: "In Process",
            item: [
                {
                    title: "<span>You can drag me too</span>",
                },
                {
                    title: "<span>Buy Milk</span>",
                },
            ],
        },
        {
            id: "mx_working",
            title: "Working",
            item: [
                {
                    title: "<span>Do Something!</span>",
                },
                {
                    title: "<span>Run?</span>",
                },
            ],
        },
        {
            id: "mx_done",
            title: "Done",
            item: [
                {
                    title: "<span>All right</span>",
                },
                {
                    title: "<span>Ok!</span>",
                },
            ],
        },
    ],
});
var mxKanban2 = new jKanban({
    element: "#mx-kanban-2",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess-2",
            title: "In Process",
            class: "mx-primary",
            item: [
                {
                    title: "<span>You can drag me too</span>",
                    class: "light-primary",
                },
                {
                    title: "<span>Buy Milk</span>",
                    class: "light-primary",
                },
            ],
        },
        {
            id: "mx_working-2",
            title: "Working",
            class: "mx-success",
            item: [
                {
                    title: "<span>Do Something!</span>",
                    class: "light-success",
                },
                {
                    title: "<span>Run?</span>",
                    class: "light-success",
                },
            ],
        },
        {
            id: "mx_done-2",
            title: "Done",
            class: "mx-danger",
            item: [
                {
                    title: "<span>All right</span>",
                    class: "light-danger",
                },
                {
                    title: "<span>Ok!</span>",
                    class: "light-danger",
                },
            ],
        },
    ],
});
var mxKanban3 = new jKanban({
    element: "#mx-kanban-3",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess-3",
            title: "In Process",
            item: [
                {
                    title: `<span>You can drag me too</span>`,
                },
                {
                    title: `<span>Buy Milk</span>`,
                },
            ],
        },
        {
            id: "mx_working-3",
            title: "Working",
            item: [
                {
                    title: `<span>Do Something!</span>`,
                },
                {
                    title: `<span>Run?</span>`,
                },
            ],
        },
        {
            id: "mx_done-3",
            title: "Done",
            item: [
                {
                    title: `<span>All right</span>`,
                },
                {
                    title: `<span>Ok!</span>`,
                },
            ],
        },
    ],
});
var mxKanban4 = new jKanban({
    element: "#mx-kanban-4",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess-4",
            title: "In Process",
            item: [
                {
                    title: `<span>You can drag me too</span>`,
                },
                {
                    title: `<span>Buy Milk</span>`,
                },
            ],
        },
        {
            id: "mx_working-4",
            title: "Working",
            item: [
                {
                    title: `<span>Do Something!</span>`,
                },
                {
                    title: `<span>Run?</span>`,
                },
            ],
        },
        {
            id: "mx_done-4",
            title: "Done",
            item: [
                {
                    title: `<span>All right</span>`,
                },
                {
                    title: `<span>Ok!</span>`,
                },
            ],
        },
    ],
});
var mxKanban5 = new jKanban({
    element: "#mx-kanban-5",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess-5",
            title: "In Process",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
        {
            id: "mx_working-5",
            title: "Working",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
        {
            id: "mx_done-5",
            title: "Done",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
    ],
});
var mxKanban6 = new jKanban({
    element: "#mx-kanban-6",
    gutter: "0",
    widthBoard: "270px",
    boards: [
        {
            id: "mx_inprocess-6",
            title: "In Process",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
        {
            id: "mx_working-6",
            title: "Working",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
        {
            id: "mx_done-6",
            title: "Done",
            item: [
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
                {
                    title: `<div class="mx-kanban-card">
                    <div class="mx-kanban-card__header d-flex">
                        <div class="mx-box mx-box--round mx-box--sm mx-box--light-primary t-mr-8">
                            <span class="d-inline-block text-uppercase">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="mx-kanban-card__header-content">
                            <span class="d-block xsm-text text-capitalize t-line-1">wordpress development</span>
                            <span class="d-block text-capitalize font-weight-bold t-line-1 sm-text">New lesson is available</span>
                        </div>
                        <div class="mx-kanban-card__header-action">
                            <div class="dropdown ">
                                <button
                                    class="btn t-bg-clear t-text-dark--light-40"
                                    type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Another
                                        action</a
                                    >
                                    <a
                                        class="dropdown-item sm-text"
                                        href="#"
                                        >Something else
                                        here</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-kanban-card__body py-4">
                        <ul class="t-list d-flex align-items-center flex-wrap">
                            <li class="t-list__item">
                                <span class="t-text-gamma">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    9 feb, 2020
                                </span>
                            </li>
                            <li class="t-list__item">
                                <span class="t-text-lambda">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <span class="xsm-text">
                                    1day 30mins
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mx-kanban-card__footer">
                        <ul class="t-list avatars__group avatars__group--md">
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-link">
                                    <div class="avatars avatars--circle avatars--sm-plus">
                                        <img src="assets/img/avatar.png" alt="max" class="img-fulid w-100">
                                        <div class="avatars__add-member">
                                            <i class="las la-ellipsis-h"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>`,
                },
            ],
        },
    ],
});