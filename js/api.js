$(document).ready(function () {
  function getData(ajaxurl) {
    return $.ajax({
      url: ajaxurl,
      type: "GET",
    });
  }

  async function test() {
    try {
      const res = await getData(
        "https://api.github.com/users/adeleyeayodeji/repos"
      );
      return res;
    } catch (err) {
      console.log(err);
    }
  }

  setTimeout(() => {
    let dataFile = test();
    dataFile.then(function (data) {
      //Returning a promise
      console.log(data);
      var x = [];
      $.each(data, function (index) {
        var str = data[index].description;
        const title = data[index].name;
        let newtitle = title.substr(0, 25);
        var res = str.substr(0, 50);
        x +=
          "<div class='col-lg-4 col-md-6 col-sm-6'><div class='service_single_item'><i class='mbri-github'></i><a href='" +
          data[index].html_url +
          "' target='_blank' rel='noopener'><h6 style='font-size: 16px;' data-hover='" +
          newtitle +
          "..'>" +
          newtitle +
          "..</h6></a><p>" +
          res +
          "..</p><a href='" +
          data[index].html_url +
          "/archive/" +
          data[index].default_branch +
          ".zip' class='float-left' style='border: 1px solid #222;border: 1px solid #222;padding: 5px;margin-top: 20px;color: white;' rel='noopener'>Download <span class='mbri-save text-bold' style='color: #ba0d84;margin-left: 8px;'></span></a><p class'float-right text-center' style='border: 1px solid #222;color: #fff; margin-left: 150px;padding: 5px;text-align: center;margin-top: 20px;'>" +
          data[index].language +
          "</p></div></div>";

        return index < 2;
      });
      $("#loops").html("");
      var load = $("#loops").append(x);
      if (load) {
        $("#loadmore").fadeIn();
      }
    });
  }, 10000);
});
