<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Web app that takes pictures</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script>
        const videoPlayer = document.querySelector("#player");
        const canvasElement = document.querySelector("#canvas");
        const captureButton = document.querySelector("#capture-btn");
        const imagePicker = document.querySelector("#image-picker");
        const imagePickerArea = document.querySelector("#pick-image");
        const newImages = document.querySelector("#newImages");

        // Image dimensions
        const width = 640;
        const height = 480;
        let zIndex = 1;

        const createImage = (src, alt, title, width, height, className) => {
            let newImg = document.createElement("img");

            if (src !== null) newImg.setAttribute("src", src);
            if (alt !== null) newImg.setAttribute("alt", alt);
            if (title !== null) newImg.setAttribute("title", title);
            if (width !== null) newImg.setAttribute("width", width);
            if (height !== null) newImg.setAttribute("height", height);
            if (className !== null) newImg.setAttribute("class", className);

            return newImg;
        };

        const startMedia = () => {
            if (!("mediaDevices" in navigator)) {
                navigator.mediaDevices = {};
            }

            if (!("getUserMedia" in navigator.mediaDevices)) {
                navigator.mediaDevices.getUserMedia = constraints => {
                    const getUserMedia =
                        navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

                    if (!getUserMedia) {
                        return Promise.reject(new Error("getUserMedia is not supported"));
                    } else {
                        return new Promise((resolve, reject) =>
                            getUserMedia.call(navigator, constraints, resolve, reject)
                        );
                    }
                };
            }

            navigator.mediaDevices
                .getUserMedia({
                    video: true
                })
                .then(stream => {
                    videoPlayer.srcObject = stream;
                    videoPlayer.style.display = "block";
                })
                .catch(err => {
                    imagePickerArea.style.display = "block";
                });
        };

        // Capture the image, save it and then paste it to the DOM
        captureButton.addEventListener("click", event => {
            // Draw the image from the video player on the canvas
            canvasElement.style.display = "block";
            const context = canvasElement.getContext("2d");
            context.drawImage(videoPlayer, 0, 0, canvas.width, canvas.height);

            videoPlayer.srcObject.getVideoTracks().forEach(track => {
                // track.stop();
            });

            // Convert the data so it can be saved as a file
            let picture = canvasElement.toDataURL();

            // Save the file by posting it to the server
            fetch("./api/save_image.php", {
                    method: "post",
                    body: JSON.stringify({
                        data: picture
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        // Create the image and give it the CSS style with a random tilt
                        //  and a z-index which gets bigger
                        //  each time that an image is added to the div
                        let newImage = createImage(
                            data.path,
                            "new image",
                            "new image",
                            width,
                            height,
                            "masked"
                        );
                        console.log(newImage);
                        let tilt = -(20 + 60 * Math.random());
                        newImage.style.transform = "rotate(" + tilt + "deg)";
                        zIndex++;
                        newImage.style.zIndex = zIndex;
                        newImages.appendChild(newImage);
                        canvasElement.classList.add("masked");
                    }
                })
                .catch(error => console.log(error));
        });

        window.addEventListener("load", event => startMedia());
    </script>
    <style>
        .layout {
            width: 1000px;
            margin: 100px auto;
            text-align: center;
        }

        .row {
            width: 100;
            position: relative;
            clear: both;
        }

        .cell {
            float: right;
            display: block;
            width: 50%;
        }

        .center {
            text-align: center;
        }

        #newImages {
            height: 300px;
            position: relative;
            width: 100%;
            text-align: center;
            margin-right: auto;
            margin-left: -150px;
        }

        img.masked {
            position: absolute;
            background-color: #fff;
            border: 1px solid #babbbd;
            padding: 10px;
            box-shadow: 1px 1px 1px #babbbd;
            margin: 10px auto 0;
        }

        #player {
            width: 640px;
            height: 480px;
            margin: 10px auto;
            border: 1px solid #babbbd;
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        canvas {
            width: 320px;
            height: 240px;
            margin: 10px auto;
            border: 1px solid #babbbd;
        }

        #capture-btn {
            width: 130px;
            margin: 0 auto;
        }

        #pick-image {
            display: none;
            text-align: center;
            padding-top: 30px;
        }

        .btn.btn-primary {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;

        }
    </style>


    <div class="layout">
        <div id="newImages"></div>

        <div class="row">
            <div class="cell">
                <video id="player" autoplay></video>
            </div>
            <div class="cell"></div>
            <canvas id="canvas" width="640px" height="480px"></canvas>
        </div>
    </div>
    <div class="center">
        <button class="btn btn-primary" id="capture-btn">Capture</button>
    </div>
    <div id="pick-image">
        <label>Video is not supported. Pick an Image instead</label>
        <input type="file" accept="image/*" id="image-picker">
    </div>
    </div>

    <script src="script.js"></script>
</body>

</html>