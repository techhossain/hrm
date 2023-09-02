"use strict";
var uppy = Uppy.Core()
    .use(Uppy.DragDrop, {
        inline: true,
        target: "#UppyDragDrop",
    })
    .use(Uppy.Tus, { endpoint: "https://master.tus.io/files/" });

uppy.on("complete", (result) => {
    console.log(
        "Upload complete! We’ve uploaded these files:",
        result.successful
    );
});

var uppy2 = Uppy.Core()
    .use(Uppy.Dashboard, {
        inline: true,
        target: "#uppyDashBoard",
        height: 450,
    })
    .use(Uppy.Webcam, {
        target: Uppy.Dashboard
    })
    .use(Uppy.Tus, { endpoint: "https://master.tus.io/files/" });
