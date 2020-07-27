<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Drivelink Generate Direct Download Links for your google drive files">
  <meta name="author" content="Anonembed/drivelink">


  <title>Generate Direct Download link for google drive</title>

 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <style>
      body{font-family:Lato,'Helvetica Neue',Helvetica,Arial,sans-serif}h1,h2,h3,h4,h5,h6{font-family:Lato,'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:700}header.masthead{position:relative;background-color:#343a40;background:url("https://i.imgur.com/hh44oFu.jpg") no-repeat center center;background-size:cover;padding-top:8rem;padding-bottom:8rem}header.masthead .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}header.masthead h1{font-size:2rem}@media (min-width:768px){header.masthead{padding-top:12rem;padding-bottom:12rem}header.masthead h1{font-size:3rem}}.showcase .showcase-text{padding:3rem}.showcase .showcase-img{min-height:30rem;background-size:cover}@media (min-width:768px){.showcase .showcase-text{padding:7rem}}.features-icons{padding-top:7rem;padding-bottom:7rem}.features-icons .features-icons-item{max-width:20rem}.features-icons .features-icons-item .features-icons-icon{height:7rem}.features-icons .features-icons-item .features-icons-icon i{font-size:4.5rem}.features-icons .features-icons-item:hover .features-icons-icon i{font-size:5rem}.testimonials{padding-top:7rem;padding-bottom:7rem}.testimonials .testimonial-item{max-width:18rem}.testimonials .testimonial-item img{max-width:12rem;-webkit-box-shadow:0 5px 5px 0 #adb5bd;box-shadow:0 5px 5px 0 #adb5bd}.call-to-action{position:relative;background-color:#343a40;background-size:cover;padding-top:7rem;padding-bottom:7rem}.call-to-action .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}footer.footer{padding-top:4rem;padding-bottom:4rem}h1{font-weight: 100;}.features-icons{padding-top: 1rem;}
  </style>


</head>

<body>
 <!-- Search -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-4">Paste Google Drive Link</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" id="link" name="link" value="" class="form-control form-control-lg" placeholder="Paste Link here" required>
              </div>
              <div class="col-12 col-md-3">
                <button id="gog" class="btn btn-block btn-lg btn-primary"><i class="fas fa-arrow-circle-down"></i></button>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light text-center">
    <div class="container">
        <div class="row">
        <div class="col">
          <div id="results">
          
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">

              <i class="fas fa-paste m-auto"></i>
            </div>

            <p class="lead mb-0"> Paste Google drive Link!</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-arrow-circle-down m-auto"></i>
            </div>

            <p class="lead mb-0">Hit <i class="fas fa-arrow-circle-down"></i>&nbsp; and the Download starts!  </p>
          </div>
        </div>

         <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <i class="fas fa-share-alt m-auto"></i>
            </div>

            <p class="lead mb-0">Enjoy your Direct Download!</p>
          </div>
        </div>

        </div>



      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script>
    const downloadBtn = document.querySelector("#gog");
    const redirectURL = "https://orange-mode-c97d.yashptel.workers.dev/";
    downloadBtn.addEventListener("click", () => {
      const url = document.querySelector("#link").value;
      document.querySelector("#link").value ="";
      var matches = url.match(/\bhttps?:\/\/\S+/gi);
      var fileID = "";


      const copyToClipboard = (str) => {
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
      };

      const alertLink = (finalURL) => {
        const newLink = `<div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Generated!!</strong> Your link is generated. <a id="download-link" href="process.php?id=`+ finalURL +`" >Download now</a>&nbsp;&nbsp;&nbsp;<a id="copy-link" href="">Copy to clipboard</a><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button></div>`;
        const results = document.querySelector("#results");
        results.innerHTML = newLink;
        const copyLink = document.querySelector("#copy-link");
        copyLink.addEventListener('click', () => {
          event.preventDefault();
          copyToClipboard(window.location.href + "process.php?id=" +finalURL);
          copyLink.innerHTML = "Copied to clipboard";
          setTimeout(() => { copyLink.innerHTML = "Copy to clipboard"; }, 3000);
        })
        const downloadLink = document.querySelector("#download-link");
        downloadLink.addEventListener('click', () => {
          downloadLink.innerHTML = "Downloading...";
          setTimeout(() => { downloadLink.innerHTML = "Download again"; }, 3000);
        })
        
      }

      if (url.indexOf("view") !== -1) {
          fileID = matches[0].split("/")[5];
          const finalURL = redirectURL + fileID;
          alertLink(fileID);
      } else if (url.indexOf("open?id=") !== -1) {
          fileID = matches[0].split("open?id=")[1].trim()
          const finalURL = redirectURL + fileID;
          alertLink(fileID);
      } else if (url.indexOf("uc?id=") !== -1) {
          fileID = matches[0].split("uc?id=")[1].split("&")[0].trim()
          const finalURL = redirectURL + fileID;
          alertLink(fileID);
      }
    })
  </script>
</body>
</html>