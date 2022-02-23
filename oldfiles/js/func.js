$(document).ready(() => {
    function setColor(prop_name, colors) {
        // let colors = '173,30,33';
        let c = colors.split(",");

        clara.scene.set({
            name: prop_name,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: c[0] / 255,
            g: c[1] / 255,
            b: c[2] / 255
        });
    }

    let showPart = prop_name => {
        clara.scene.set({
            type: 'PolyMesh',
            name: prop_name,
            plug: 'Properties',
            property: 'visible'
        }, true);
    }

    let hidePart = prop_name => {
        clara.scene.set({
            name: prop_name,
            plug: 'Properties',
            property: 'visible'
        }, false);
    }

    let showModel = prop_name => {
        clara.scene.set({
            name: prop_name,
            plug: 'Properties',
            property: 'visible'
        }, true);
    }

    let hideModel = prop_name => {
        clara.scene.set({
            name: prop_name,
            plug: 'Properties',
            property: 'visible'
        }, false);
    }
    let setImage = (prop_name, imgsrc) => {

        clara.assets.importImage(imgsrc, {
            resizeTo: 1024,
            targetFormat: 'jpg',
            quality: 60
        }).then(handleImport).catch(handleError);

        function handleImport(attrs) {
            clara.scene.set({
                name: prop_name,
                plug: 'Material',
                property: 'baseMap'
            }, attrs.imageNodeId);
        };

        function handleError(err) {
            console.log('Import image error: ', err);
        }
    }

    $(document).on("click", ".selectModel:first", function () {
        $(".size-btn").trigger("click");
        $(".selectSize:eq(0)").attr("data-modelid", "Model 1 S1")
        $(".selectSize:eq(1)").attr("data-modelid", "Model 1 S2")
        $(".selectSize:eq(2)").attr("data-modelid", "Model 1 S3")
        $(this).find("input[type='radio']").prop("checked", "true");
    });
    $(document).on("click", ".selectModel:last", function () {
        $(".size-btn").trigger("click");
        $(".selectSize:eq(0)").attr("data-modelid", "Model 3 S1")
        $(".selectSize:eq(1)").attr("data-modelid", "Model 3 S2")
        $(".selectSize:eq(2)").attr("data-modelid", "Model 3 S3")
        $(this).find("input[type='radio']").prop("checked", "true");
    });

    $(document).on("click", ".selectModel,.selectSize", function () {
        // $(".loadingDiv").removeClass("d-none");
        $(".selectModel,.selectSize").find("input[type='radio']").removeAttr("checked");
        let modelId = $(this).data('modelid');
        // console.log(modelId);
        let models = ["Model 1 S1", "Model 1 S2", "Model 1 S3", "Model 2 S1", "Model 3 S1", "Model 3 S2", "Model 3 S3"];
        models.forEach(model => hideModel(model));
        showModel(modelId);
        $(this).find("input[type='radio']").prop("checked", "true");
    });


    $('.select-parts li').click(function () {

        var partName = $(this).attr('data-partName');
        $('.circle').attr('data-partName', partName);

        var imgUrl = $(this).attr('data-url');
        console.log(imgUrl);
        // setImage('structure, Wood Joist/Rafter Layer, Batt Insulation', imgUrl);
        // setImage('Gypsum Wall Board', imgUrl);
    });
    
    $('.circle').click(function () {

        var colorName = $(this).attr('data-color');
        var partName = $(this).attr('data-partName');

        setColor(partName, colorName);
    });

    // for stories
    $('.story-tab .tabs-item').click(function () {
        var userStory = $(this).attr('data-story');
        alert(userStory);
        $('#story').val(userStory);
    });

    function showMsg(targetElem,type,msg) {
        $(targetElem).html(`<div class="alert alert-${type} alert-dismissible fade show" role="alert" style="border-radius:100px">
        <strong>${msg}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>`);
    }
    // showMsg("body","danger","All Feilds are required!!");

})