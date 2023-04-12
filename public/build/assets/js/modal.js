//B Slecte2
$(document).ready(function () {
    $('.js-example-basic-multiple').select2();// Select Multipple
    $(".js-example-responsive").select2();// select simple
});
//E Slecte2

//B Modal customize
//B Actor
const form_actor = document.forms["form_actor"];
const form2_actor = document.forms["form2_actor"];
const methode_put_actor = document.querySelector("#methode_put_actor");
const route_store_actor = document.querySelector("#route_store_actor");
const route_update_actor = document.querySelector("#route_update_actor");
const route_destroy_actor = document.querySelector("#route_destroy_actor");


// edie & update
function modalActorEdit(id, name, date, link) {
    //btn save
    form_actor.save.innerHTML = "Saves Changes";

    // set inputs
    form_actor.id.value = id;
    form_actor.fullname.value = name;
    form_actor.imdb_path.value = link;
    form_actor.date_birthday.value = date;

    // action
    form_actor.action = route_update_actor.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_actor.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addActor() {
    //clear
    form_actor.reset();

    // action changes
    form_actor.action = route_store_actor.value;

    //btn save
    form_actor.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_actor.childNodes[0].remove();
}

// delete
function modalActorTrash(id) {
    form2_actor.action = route_destroy_actor.value.concat("/" + id);
}
// E Actor

//----------------
// B Country
const form_country = document.forms["form_country"];
const form2_country = document.forms["form2_country"];
const methode_put_country = document.querySelector("#methode_put_country");
const route_store_country = document.querySelector("#route_store_country");
const route_update_country = document.querySelector("#route_update_country");
const route_destroy_country = document.querySelector("#route_destroy_country");

// edie & update
function modalCountryEdit(id, name) {
    //btn save
    form_country.save.innerHTML = "Saves Changes";

    // set inputs
    form_country.id.value = id;
    form_country.name.value = name;

    // action
    form_country.action = route_update_country.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_country.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addCountry() {
    //clear
    form_country.reset();

    // action changes
    form_country.action = route_store_country.value;

    //btn save
    form_country.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_country.childNodes[0].remove();
}

// delete
function modalCountryTrash(id) {
    form2_country.action = route_destroy_country.value.concat("/" + id);
}
// E Country

//----------------
// B Quality
const form_quality = document.forms["form_quality"];
const form2_quality = document.forms["form2_quality"];
const methode_put_quality = document.querySelector("#methode_put_quality");
const route_store_quality = document.querySelector("#route_store_quality");
const route_update_quality = document.querySelector("#route_update_quality");
const route_destroy_quality = document.querySelector("#route_destroy_quality");

// edie & update
function modalQualityEdit(id, name) {
    //btn save
    form_quality.save.innerHTML = "Saves Changes";

    // set inputs
    form_quality.id.value = id;
    form_quality.name.value = name;

    // action
    form_quality.action = route_update_quality.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_quality.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addQuality() {
    //clear
    form_quality.reset();

    // action changes
    form_quality.action = route_store_quality.value;

    //btn save
    form_quality.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_quality.childNodes[0].remove();
}

// delete
function modalQualityTrash(id) {
    form2_quality.action = route_destroy_quality.value.concat("/" + id);
}
// E Quality

//----------------
// B Genre
const form_genre = document.forms["form_genre"];
const form2_genre = document.forms["form2_genre"];
const methode_put_genre = document.querySelector("#methode_put_genre");
const route_store_genre = document.querySelector("#route_store_genre");
const route_update_genre = document.querySelector("#route_update_genre");
const route_destroy_genre = document.querySelector("#route_destroy_genre");

// edie & update
function modalGenreEdit(id, name) {
    //btn save
    form_genre.save.innerHTML = "Saves Changes";

    // set inputs
    form_genre.id.value = id;
    form_genre.name.value = name;

    // action
    form_genre.action = route_update_genre.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_genre.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addGenre() {
    //clear
    form_genre.reset();

    // action changes
    form_genre.action = route_store_genre.value;

    //btn save
    form_genre.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_genre.childNodes[0].remove();
}

// delete
function modalGenreTrash(id) {
    form2_genre.action = route_destroy_genre.value.concat("/" + id);
}
// E Genre

//----------------
// B Type
const form_type = document.forms["form_type"];
const form2_type = document.forms["form2_type"];
const methode_put_type = document.querySelector("#methode_put_type");
const route_store_type = document.querySelector("#route_store_type");
const route_update_type = document.querySelector("#route_update_type");
const route_destroy_type = document.querySelector("#route_destroy_type");

// edie & update
function modalTypeEdit(id, name) {
    //btn save
    form_type.save.innerHTML = "Saves Changes";

    // set inputs
    form_type.id.value = id;
    form_type.name.value = name;

    // action
    form_type.action = route_update_type.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_type.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addType() {
    //clear
    form_type.reset();

    // action changes
    form_type.action = route_store_type.value;

    //btn save
    form_type.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_type.childNodes[0].remove();
}

// delete
function modalTypeTrash(id) {
    form2_type.action = route_destroy_type.value.concat("/" + id);
}
// E Type

//----------------
// B Media
const form_media = document.forms["form_media"];
const form2_media = document.forms["form2_media"];
const methode_put_media = document.querySelector("#methode_put_media");
const route_store_media = document.querySelector("#route_store_media");
const route_update_media = document.querySelector("#route_update_media");
const route_destroy_media = document.querySelector("#route_destroy_media");

// edie & update
function modalMediaEdit(id, name, duration, link_media, link_imdb, description, released_year, director, production, trailer, status, genres, actors, country_id, quality_id, type_id) {
    //btn save
    form_media.save.innerHTML = "Saves Changes";

    // set inputs
    form_media.id.value = id;
    form_media.name.value = name;
    form_media.duration.value = duration;
    form_media.link_media.value = link_media;
    form_media.link_imdb.value = link_imdb;
    form_media.description.value = description;
    form_media.released_year.value = released_year;
    form_media.director.value = director;
    form_media.production.value = production;
    form_media.trailer.value = trailer;
    form_media.status.value = status;
    //remove required picture
    form_media.picture.removeAttribute('required');

    //B select 2
    //data string to array
    let genres_array = genres.split(' ');
    let actors_array = actors.split(' ');
    $('#genres').val(genres_array).trigger('change'); // Notify any JS components that the value changed
    $('#actors').val(actors_array).trigger('change'); // Notify any JS components that the value changed
    //E select 2
    form_media.country_id.value = country_id;
    form_media.quality_id.value = quality_id;
    form_media.type_id.value = type_id;

    // action
    form_media.action = route_update_media.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_media.innerHTML = '<input type="hidden" name="_method" value="PUT">';
}

// add
function addMedia() {
    //clear
    form_media.reset();
    $('#genres').val(null).trigger('change');
    $('#actors').val(null).trigger('change');

    // action changes
    form_media.action = route_store_media.value;

    //btn save
    form_media.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_media.childNodes[0].remove();

    //set required picture
    form_media.picture.setAttribute('required', '');
}

// delete
function modalMediaTrash(id) {
    form2_media.action = route_destroy_media.value.concat("/" + id);
}
// E Media

//----------------
// B Slider
const form_slider = document.forms["form_slider"];
const form2_slider = document.forms["form2_slider"];
const methode_put_slider = document.querySelector("#methode_put_slider");
const route_store_slider = document.querySelector("#route_store_slider");
const route_update_slider = document.querySelector("#route_update_slider");
const route_destroy_slider = document.querySelector("#route_destroy_slider");

// edie & update
function modalSliderEdit(id, id_media) {
    //btn save
    form_slider.save.innerHTML = "Saves Changes";

    // set inputs
    form_slider.id.value = id;
    $('#media_id').val(id_media).trigger('change');
    //remove required picture
    form_slider.picture.removeAttribute('required');

    // action
    form_slider.action = route_update_slider.value.concat("/" + id);

    //add methode put for update & remove methode delete
    methode_put_slider.innerHTML = '<input type="hidden" name="_method" value="PUT">';

}

// add
function addSlider() {
    //clear
    form_slider.reset();

    // action changes
    form_slider.action = route_store_slider.value;

    //btn save
    form_slider.save.innerHTML = "Add";

    // remove methode PUT
    methode_put_slider.childNodes[0].remove();

    //set required picture
    form_slider.picture.setAttribute('required', '');
}

// delete
function modalSliderTrash(id) {
    form2_slider.action = route_destroy_slider.value.concat("/" + id);
}
// E Slider

//B Serie
const form_serie_update = document.forms["form_serie_update"];
const form_serie_delete = document.forms["form_serie_delete"];
const route_update_serie = document.getElementById('route_update_serie');
const span_name = document.getElementById('span_name');
const span_season = document.getElementById('span_season');

//B create
//div duplacate
const parent_div = document.getElementById('parent_div');
const new_div = document.createElement('div');

//div duplacate
parent_div.appendChild(new_div);
function addserie() {
    new_div.innerHTML = ''; //clear new div
}

let fieldCount = 2;
new_div.innerHTML = ''
function startDuplacate() {

    const newField = `
    <div class="border border-gray-300 mx-6 mb-2 py-3">
        <div class="m-3 px-4">
        <label class="inline-block mb-2">Number</label>
        <input type="number" name="num_ep[]" data-parsley-trigger="change" min="1" required
            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
            id="number-ep-${fieldCount}" value="${fieldCount}">
        </div>
        <div class="m-3 px-4">
            <label class="inline-block mb-2">URL</label>
            <input type="url" name="url[]" data-parsley-trigger="keyup" required
                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                id="url-ep-${fieldCount}" placeholder="WWW">
        </div>
        <div class="my-5 mx-7 flex justify-end">
            <button class="remove-field mx-10 bg-red-600 hover:bg-red-400 text-white px-4 py-1 rounded-sm" type="button"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    `;

    fieldCount++;

    new_div.insertAdjacentHTML('beforeend', newField);

    const btnsRemove = document.querySelectorAll('.remove-field');
    btnsRemove.forEach(button => {
        button.addEventListener('click', () => {
            button.parentElement.parentElement.remove();
            if (fieldCount > 1) {
                fieldCount--;
            } else {
                fieldCount++;
            }
        });
    });
}
//E Add

//B Edit
const parent_div_update = document.getElementById('parent_div_update');
const new_div_update = document.createElement('div');
function modalSerieEdit(id, name, num_season, array_ep, array_url, array_id) {
    form_serie_update.reset();

    // change string to array
    let episodes = array_ep.split(' ');
    let url = array_url.split(' ');
    let ep_id = array_id.split(' ');

    // action
    form_serie_update.action = route_update_serie.value.concat("/" + id);

    //spans
    span_name.textContent = name;
    span_season.textContent = num_season;

    //div duplacate
    parent_div_update.appendChild(new_div_update);
    new_div_update.innerHTML = ''; //clear new div
    episodes.forEach((item, index) => {

        let newField;
        if (item != '') {
            newField = `
            <div class="border border-gray-300 mx-6 mb-2 py-3">
                <div class="m-3 px-4">
                    <label class="inline-block mb-2">Number</label>
                    <input type="hidden" name="ep_id[]" value="${ep_id[index]}">
                    <input type="number" name="num_ep_update[]" data-parsley-trigger="change" min="1" required
                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                        id="number-ep-1" value="${item}">
                </div>
                <div class="m-3 px-4">
                    <label class="inline-block mb-2">URL</label>
                    <input type="url" name="url_update[]" data-parsley-trigger="keyup" data-parsley-length="[2, 255]" required
                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                        id="exampleInput1" placeholder="New URL" value="${url[index]}">
                </div>
            </div>
            `;

            //btn save remove disabled
            form_serie_update.update.removeAttribute('disabled');
        } else {
            //affiche alert
            newField = `
            <div class="flex flex-wrap flex-row m-6 justify-center	">
                <div class="relative bg-red-100 text-red-900 py-3 px-6 rounded mb-4">
                    Sorry You Dont Have Any Episodes In The Seasson!
                </div>
            </div>`;

            //btnc save disabled
            form_serie_update.update.setAttribute('disabled', '');
        }
        new_div_update.insertAdjacentHTML('beforeend', newField);
    });
}
//E Edit

//B Delete
const route_destroy_serie = document.getElementById('route_destroy_serie');
function modalSerieTrash(id){
    console.log(form_serie_delete.action = route_destroy_serie.value.concat("/" + id));
}
//E Delete
//E Serie
//E Modal




