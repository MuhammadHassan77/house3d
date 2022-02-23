$(document).ready(() => {

  let moveCamOut = () => {
    // var cameras = clara.scene.getAll({ type: 'Camera', property: 'name' });
    let outter_cam = '8563dc3f-c1ad-4e63-9f79-239b3148b65b';
    clara.player.animateCameraTo(outter_cam, 300);
  }
  let moveCamIn = () => {
    // var cameras = clara.scene.getAll({ type: 'Camera', property: 'name' });
    let inner_cam = '358cc395-73d7-4f9b-be4e-7c9603d1b8a2';
    clara.player.animateCameraTo(inner_cam, 300);
  }

  $(document).on("click", ".selectModel:eq(0),.selectModel:eq(3)", function () {
    $(".size-menu").slideDown(500);
    $(".first-menu").slideUp(500);
    $(".mob-navigator[data-tab='#mobsize-tab']").trigger("click");

    $(".selectSize:eq(0),.selectSize:eq(3)").attr("data-modelid", "Model 1 S1");
    $(".selectSize:eq(1),.selectSize:eq(4)").attr("data-modelid", "Model 1 S2");
    $(".selectSize:eq(2),.selectSize:eq(5)").attr("data-modelid", "Model 1 S3");
    $(this).find("input[type='radio']").prop("checked", true);
  });
  $(document).on("click", ".selectModel:eq(2),.selectModel:eq(5)", function () {
    $(".size-menu").slideDown(500);
    $(".first-menu").slideUp(500);
    $(".mob-navigator[data-tab='#mobsize-tab']").trigger("click");

    $(".selectSize:eq(0),.selectSize:eq(3)").attr("data-modelid", "Model 3 S1");
    $(".selectSize:eq(1),.selectSize:eq(4)").attr("data-modelid", "Model 3 S2");
    $(".selectSize:eq(2),.selectSize:eq(5)").attr("data-modelid", "Model 3 S3");
    $(this).find("input[type='radio']").prop("checked", true);
  });

  $(document).on("click", ".selectModel", function () {
    $(".selectModel").find("input[type='radio']").removeAttr("checked");
    let modelId = $(this).attr("data-modelid");
    let models = ["Model 1 S1", "Model 1 S2", "Model 1 S3", "Model 2 S1", "Model 3 S1", "Model 3 S2", "Model 3 S3"];
    models.forEach((model) => hideModel(model));
    showModel(modelId);
    // moveCamOut();
    $(this).find("input[type='radio']").prop("checked", true);
    config.modelSize = modelId;
    config.modelId = modelId
    // console.log(config);
    // let ind = $(this).index();
    // console.log(ind,$(this))
    // if (ind == 0 || ind == 3) {
    //   $(".size-menu").slideDown(500);
    //   $(".first-menu").slideUp(500);
    //   $(".mob-navigator[data-tab='#mobsize-tab']").trigger("click");

    //   $(".selectSize:eq(0),.selectSize:eq(3)").attr("data-modelid", "Model 1 S1");
    //   $(".selectSize:eq(1),.selectSize:eq(4)").attr("data-modelid", "Model 1 S2");
    //   $(".selectSize:eq(2),.selectSize:eq(5)").attr("data-modelid", "Model 1 S3");
    // } else if (ind == 2 || ind == 5) {
    //   $(".size-menu").slideDown(500);
    //   $(".first-menu").slideUp(500);
    //   $(".mob-navigator[data-tab='#mobsize-tab']").trigger("click");

    //   $(".selectSize:eq(0),.selectSize:eq(3)").attr("data-modelid", "Model 3 S1");
    //   $(".selectSize:eq(1),.selectSize:eq(4)").attr("data-modelid", "Model 3 S2");
    //   $(".selectSize:eq(2),.selectSize:eq(5)").attr("data-modelid", "Model 3 S3");
    // }

  });

  $(document).on("click", ".selectSize", function () {
    $(".selectSize").find("input[type='radio']").removeAttr("checked");
    let modelId = $(this).attr("data-modelid");
    let models = ["Model 1 S1", "Model 1 S2", "Model 1 S3", "Model 2 S1", "Model 3 S1", "Model 3 S2", "Model 3 S3"];
    models.forEach((model) => hideModel(model));
    showModel(modelId);
    $(this).find("input[type='radio']").prop("checked", true);
    // moveCamOut();
    config.modelSize = modelId;
    config.modelId = modelId
    // console.log(config);
  });

  // huzaifa code 20-1-22
  $(document).on("click", ".select-parts li,.parts-select .model-box", function () {
    var partName = $(this).attr("data-partName");
    $(".circle,.color-box").attr("data-partName", partName);
    $(".mob-navigator[data-tab='#mobsec-tab']").trigger("click");
    // console.log(partName);

    // var imgUrl = $(this).attr("data-url");
    // console.log(imgUrl);
    // setImage('structure, Wood Joist/Rafter Layer, Batt Insulation', imgUrl);
    // setImage('Gypsum Wall Board', imgUrl);
  });

  $(document).on("click", ".circle,.color-box", function () {
    var colorName = $(this).attr("data-color");
    var partName = $(this).attr("data-partName");

    setColor(partName, colorName);

    if (partName == "Gypsum Wall Board") {
      // moveCamOut();
      console.log((config.wallColor.color = colorName), config);
    } else if (partName == "Wood-SPI") {
      // moveCamIn();
      console.log((config.interiorColor.color = colorName), config);
    } else if (partName == "structure, Wood Joist/Rafter Layer, Batt Insulation") {
      // moveCamOut();
      config.roofColor.color = colorName
      // console.log(config);
    }
  });



  $(document).on("click", "li.four-tab-btn,.mob-navigator[data-tab='#mobfour-tab']", function () {
    let modelId = $(".selectSize").find("input[type='radio']:checked");
    // modelId = modelId.parent().parent().attr("data-modelId");
    modelId = config.modelSize;
    // modelId = modelId.attr("data-modelId")
    // console.log(modelId);
    $(".four-tab ul.d-flex,#mobfour-tab .partsRow").html(``);
    let j = 0;
    partNames.filter((pname, i) => {
      if (pname.modelName.name == modelId)
        Object.keys(pname).map((item, ind) => {
          // console.log(pname[item], pname[item].name, item)
          if (pname[item].name != modelId) {
            // console.log(config['partsToggle'][j++], item)
            if ($(window).width() >= 576)
              $(".four-tab ul.d-flex").append(`
              <li class="tabs-item toggleParts" data-partname="${pname[item].name}">
                <img src="img/a1.png" class="img-fluid mb-2">
                <!-- <p>8'x'10</p> -->
                <label class="box">
                  <input type="radio" naam="pNameradio"  name="${item}">
                  <span class="checkmark"></span>
                </label>
                <p class="m-0 p-0">${item}</p>
              </li>`);
          }
          else {
            $("#mobfour-tab .partsRow").append(`
                  <div class="col-6">
                    <div class="model-box toggleParts" data-partName="${pname[item].name}">
                      <img src="img/a1.png" class="img-fluid">
                      <!-- <p>lorem ipsum</p> -->
                      <p>${item}</p>
                    </div>
                  </div>`);
          }
        })
    })

  })

  $(document).on("click", ".toggleParts", function () {
    // let checked = $(this).find("input[type='radio']").prop("checked", "true");
    let partName = $(this).attr("data-partName");

    // console.log(partName)
    if ($(this).find("input[type='radio']").prop("checked") == true) {
      setTimeout(() => {
        // console.log(true)
        $(this).find("input[type='radio']").prop("checked", false)
        if (partName.search(",") != -1) {
          p = partName.split(",");
          p.map((v, i) => showModel(v))
        } else showModel(partName)
        partNames.filter((pname, i) => {
          Object.keys(pname).map((item, ind) => {
            if (pname[item].name == partName)
              pname[item].visibility = true
            // console.log(pname[item])
          })
        })
      }, 250);
    } else {
      setTimeout(() => {
        // console.log(false)
        $(this).find("input[type='radio']").prop("checked", true)
        if (partName.search(",") != -1) {
          p = partName.split(",");
          p.map((v, i) => hideModel(v))
        } else hideModel(partName)
        partNames.filter((pname, i) => {
          Object.keys(pname).map((item, ind) => {
            if (pname[item].name == partName)
              // console.log(pname[item])
              pname[item].visibility = false
          })
        })
      }, 250);
    }
  });

  $(document).on("click", ".modelScale", function () {
    $(".modelScale").find("input[type='radio']").removeAttr("checked");
    let s = $(this).data("scale");
    s /= 2;
    console.log(s)
    // h = h == 1 ? h = 1 : h / 2
    // console.log(h)
    transform(s, s, s, config.modelSize);
    $(this).find("input[type='radio']").prop("checked", true);

  });




});
