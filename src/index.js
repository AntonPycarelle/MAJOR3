require('./style.css');
{
  // --------------- Filter ---------------

  const $filterForm = document.querySelector(`.filter__form`),
    $shows = document.querySelector(`.shows__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`change`, handleSubmitFilterForm);
    }
    const $forms = document.querySelectorAll(`.index-form`);
    console.log($forms);
    $forms.forEach($form => {
      $form.noValidate = true;
      $form.addEventListener(`submit`, handeSubmitForm);

      addValidationListeners(Array.from($form.elements));
    });
  };

  const handleLoadPlayers = data => {
    const obj = data;
    const shows = Object.keys(obj).map(function(key) {
      return obj[key];
    });

    const arrayOfObjects = Object.keys(shows).map(key => {
      const ar = shows[key];
      ar.key = key;

      return ar;
    });

    $shows.innerHTML = arrayOfObjects
      .map(show => createPlayerListItem(show))
      .join(``);
  };

  const createPlayerListItem = show => {
    return `
    <article class="bg-primary">
    <div>
    <img class="act-pic" src="./assets/img/${show['pic']}" alt="${
  show['show_name']
}">
    </div>
    <a class="act-link" href="index.php?page=detail&amp;id=${show['showid']}">
      <div class="act-info">

        <p class="act-info__dag">${show['location_name']}</p>
        <h3 class="act-info__title bold" >${show['show_name']}</h3>
      </div>
      </a>
    </article>

  `;
  };

  const handleSubmitFilterForm = e => {
    console.log('submit');
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadPlayers(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  // --------------- Validatie ---------------

  const handeSubmitForm = e => {
    const $form = e.target;
    if (!$form.checkValidity()) {
      e.preventDefault();
      $form.querySelector(
        `.error`
      ).textContent = `Gelieve onderstaande velden correct in te vullen`;

      Array.from($form.elements).forEach(showValidationInfo);
    }
  };

  const handleInputField = e => {
    const $field = e.currentTarget;
    if ($field.checkValidity()) {
      $field.parentElement.querySelector(`.error`).textContent = ``;
    }
  };

  const showValidationInfo = $field => {
    let message;

    if ($field.validity.valueMissing) {
      message = `Verplicht`;
    }

    if (message) {
      $field.parentElement.querySelector(`.error`).textContent = message;
    }
  };

  const handleBlurField = e => {
    const $field = e.currentTarget;
    showValidationInfo($field);
  };

  const addValidationListeners = fields => {
    fields.forEach($field => {
      $field.addEventListener(`blur`, handleBlurField);
      $field.addEventListener(`input`, handleInputField);
    });
  };

  init();
}
