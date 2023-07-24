<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333C48;
        }

        .alert {
            display: flex;
            align-items: center;
            padding: 0.55rem 0.65rem 0.55rem 0.75rem;
            border-radius: 1rem;
            min-width: 400px;
            justify-content: space-between;
            margin-bottom: 2rem;
            box-shadow:
                0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
                0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
                0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
                0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
                0px 48px 208.9px rgba(0, 0, 0, 0.05),
                0px 115px 500px rgba(0, 0, 0, 0.07)
        }

        .content {
            display: flex;
            align-items: center;
        }

        .icon {
            padding: 0.5rem;
            margin-right: 1rem;
            border-radius: 39% 61% 42% 58% / 50% 51% 49% 50%;
            box-shadow:
                0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
                0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
                0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
                0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
                0px 48px 208.9px rgba(0, 0, 0, 0.05),
                0px 115px 500px rgba(0, 0, 0, 0.07)
        }

        .close {
            background-color: transparent;
            border: none;
            outline: none;
            transition: all 0.2s ease-in-out;
            padding: 0.75rem;
            border-radius: 0.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close:hover {
            background-color: #fff;
        }

        .success {
            background-color: rgba(62, 189, 97, 0.2);
            border: 2px solid #3ebd61;
        }

        .success .icon {
            background-color: #3ebd61;
        }

        .info {
            background-color: rgba(0, 108, 227, 0.2);
            border: 2px solid #006CE3;
        }

        .info .icon {
            background-color: #006CE3;
        }

        .warning {
            background-color: rgba(239, 148, 0, 0.2);
            border: 2px solid #EF9400;
        }

        .warning .icon {
            background-color: #EF9400;
        }

        .danger {
            background-color: rgba(236, 77, 43, 0.2);
            border: 2px solid #EF9400;
        }

        .danger .icon {
            background-color: #EC4D2B;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="danger alert">
            <div class="content">
                <div class="icon">
                    <svg height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fff" d="M449.07,399.08,278.64,82.58c-12.08-22.44-44.26-22.44-56.35,0L51.87,399.08A32,32,0,0,0,80,446.25H420.89A32,32,0,0,0,449.07,399.08Zm-198.6-1.83a20,20,0,1,1,20-20A20,20,0,0,1,250.47,397.25ZM272.19,196.1l-5.74,122a16,16,0,0,1-32,0l-5.74-121.95v0a21.73,21.73,0,0,1,21.5-22.69h.21a21.74,21.74,0,0,1,21.73,22.7Z" />
                    </svg>
                </div>
                <p>A Danger Message</p>
            </div>
            <button class="close">
                <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z" />
                </svg>
            </button>
        </div>

    </div>
</body>

</html>
<script>
    document.getElementById("load").style.display = "none";

    function hide() {
        document.getElementById("load").style.display = "none";
        document.getElementById("data").style.display = "block";
    }
</script>