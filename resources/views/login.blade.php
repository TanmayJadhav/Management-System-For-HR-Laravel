
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Bootstrap Registration Page with Floating Labels</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script
    type="text/javascript"
    src="/js/lib/dummy.js"
    
  ></script>

    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" href="/css/login.css">
  

  <script id="insert"></script>


    <script src="/js/stringify.js?d6d238aaf9482342aa43a18b2d01a76d2c99a31b" charset="utf-8"></script>
    <script>
      const customConsole = (w) => {
        const pushToConsole = (payload, type) => {
          w.parent.postMessage({
            console: {
              payload: stringify(payload),
              type:    type
            }
          }, "*")
        }

        w.onerror = (message, url, line, column) => {
          // the line needs to correspond with the editor panel
          // unfortunately this number needs to be altered every time this view is changed
          line = line - 70
          if (line < 0){
            pushToConsole(message, "error")
          } else {
            pushToConsole(`[${line}:${column}] ${message}`, "error")
          }
        }

        let console = (function(systemConsole){
          return {
            log: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "log")
              systemConsole.log.apply(this, args)
            },
            info: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "info")
              systemConsole.info.apply(this, args)
            },
            warn: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "warn")
              systemConsole.warn.apply(this, args)
            },
            error: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "error")
              systemConsole.error.apply(this, args)
            },
            system: function(arg){
              pushToConsole(arg, "system")
            },
            clear: function(){
              systemConsole.clear.apply(this, {})
            },
            time: function(){
              let args = Array.from(arguments)
              systemConsole.time.apply(this, args)
            },
            assert: function(assertion, label){
              if (!assertion){
                pushToConsole(label, "log")
              }

              let args = Array.from(arguments)
              systemConsole.assert.apply(this, args)
            }
          }
        }(window.console))

        window.console = { ...window.console, ...console }

        console.system("Running fiddle")
      }

      if (window.parent){
        customConsole(window)
      }
    </script>
</head>
<body>
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="Post" action="/">
            @csrf
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" name="name" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control"  name ="email" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" >
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="#">Sign In</a>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


    <script type="text/javascript">//<![CDATA[





  //]]></script>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "1nu8g6e5"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

    <script>
      let allLines = []

      window.addEventListener("message", (message) => {
        if (message.data.console){
          let insert = document.querySelector("#insert")
          allLines.push(message.data.console.payload)
          insert.innerHTML = allLines.join(";\r")

          let result = eval.call(null, message.data.console.payload)
          if (result !== undefined){
            console.log(result)
          }
        }
      })
    </script>

</body>
</html>
