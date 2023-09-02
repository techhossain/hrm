var jsonData = [
    {
        id: 1,
        text: '<span class="sm-text text-capitalize">getting started</span>',
        type: "root",
        check_callback: true,
        state: {
            opened: true,
            selected: false,
        },
        children: [
            {
                id: 102,
                text:
                    '<span class="sm-text text-capitalize">file invoice</span>',
                type: "root",
                // icon: "fa fa-file-text",
                state: {
                    opened: true,
                    selected: false,
                },
                children: [
                    {
                        id: 10201,
                        text:
                            '<span class="sm-text text-capitalize">image upload</span>',
                        icon: "fa fa-file-image-o",
                        type: "child",
                    },
                ],
            },
            {
                id: 103,
                text:
                    '<span class="sm-text text-capitalize">image upload</span>',
                icon: "fa fa-file-image-o",
                type: "child",
                state: {
                    selected: false,
                },
            },
        ],
    },
    {
        id: 2,
        text: '<span class="sm-text text-capitalize text-muted">empty folder</span>',
        type: "root",
        state: {
            selected: false,
        },
        children: [],
    },
];
var jsonData2 = [
    {
        id: 1,
        text: '<span class="sm-text text-capitalize">getting started</span>',
        type: "root",
        check_callback: true,
        state: {
            opened: true,
            selected: false,
        },
        children: [
            {
                id: 102,
                text:
                    '<span class="sm-text text-capitalize">file invoice</span>',
                type: "root",
                // icon: "fa fa-file-text",
                state: {
                    opened: true,
                    selected: false,
                },
                children: [
                    {
                        id: 10201,
                        text:
                            '<span class="sm-text text-capitalize">image upload</span>',
                        icon: "fa fa-file-image-o",
                        type: "child",
                    },
                    {
                        id: 10202,
                        text:
                            '<span class="sm-text text-capitalize">user input</span>',
                        icon: "fa fa-user-circle-o t-text-gamma",
                        type: "child",
                    },
                    {
                        id: 10203,
                        text:
                            '<span class="sm-text text-capitalize">inbox</span>',
                        icon: "fa fa-envelope-o text-success",
                        type: "child",
                    },
                ],
            },
            {
                id: 103,
                text:
                    '<span class="sm-text text-capitalize">image upload</span>',
                icon: "fa fa-bell-o text-danger",
                type: "child",
                state: {
                    selected: false,
                },
            },
        ],
    },
    {
        id: 2,
        text: '<span class="sm-text text-capitalize text-muted">empty folder</span>',
        type: "root",
        state: {
            selected: false,
        },
        children: [],
    },
];

$("#jstree-tree")
    .jstree({
        core: {
            data: jsonData,
        },
        types: {
            root: {
                icon: "fa fa-folder",
            },
            child: {
                icon: "fa fa-folder-o",
            },
            default: {},
        },
        plugins: ["search", "themes", "types"],
    })
    .on("open_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder-open");
    })
    .on("close_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder");
    });
$("#jstree-tree-1")
    .jstree({
        core: {
            data: jsonData2,
        },
        types: {
            root: {
                icon: "fa fa-folder",
            },
            child: {
                icon: "fa fa-folder-o",
            },
            default: {},
        },
        plugins: ["search", "themes", "types"],
    })
    .on("open_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder-open");
    })
    .on("close_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder");
    });
$("#jstree-tree-2")
    .jstree({
        core: {
            data: jsonData,
        },
        types: {
            root: {
                icon: "fa fa-folder text-secondary",
            },
            child: {
                icon: "fa fa-folder-o",
            },
            default: {},
        },
        plugins: ["search", "themes", "types"],
    })
    .on("open_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder-open text-secondary");
    })
    .on("close_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder text-secondary");
    });
$("#jstree-tree-3")
    .jstree({
        core: {
            data: jsonData,
        },
        types: {
            root: {
                icon: "fa fa-folder text-warning",
            },
            child: {
                icon: "fa fa-folder-o",
            },
            default: {},
        },
        plugins: ["search", "themes", "types"],
    })
    .on("open_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder-open text-warning");
    })
    .on("close_node.jstree", function (e, data) {
        data.instance.set_icon(data.node, "fa fa-folder text-warning");
    });
