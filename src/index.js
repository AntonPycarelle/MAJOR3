require('./style.css');
{
  const handeSubmitForm = e => {
    const $form = e.target;
    if (!$form.checkValidity()) {
      e.preventDefault();
      $form.querySelector(
        `.error`
      ).textContent = `Vergeet je E-mail adress niet in te vullen!`;
      // Array.from($form.elements).forEach(showValidationInfo);
    }
  };

  const handleInputField = e => {
    const $field = e.currentTarget;
    if ($field.checkValidity()) {
      $field.parentElement.querySelector(`.error`).textContent = ``;
      $field.classList.remove('border');
    }
  };

  const showValidationInfo = $field => {
    let message;

    if ($field.validity.valueMissing) {
      message = `Leeg`;
      $field.classList.add('border');
    }
    if ($field.validity.tooShort) {
      message = `Te Kort`;
    }
    if ($field.validity.typeMismatch) {
      message = `Ongeldig E-mail Adress`;
      $field.classList.add('border');
    }

    if (message) {
      console.log('message');

      // $field.parentElement.querySelector(`.error`).textContent = message;
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

  const form = document.getElementById('formID'); // form has to have ID: <form id="formID">
  form.noValidate = true;
  form.addEventListener(
    'submit',
    function(event) {
      // listen for form submitting
      if (!event.target.checkValidity()) {
        event.preventDefault(); // dismiss the default functionality
        // alert('Please, fill the form'); // error message
      }
    },
    false
  );

  const init = () => {
    const $form = document.querySelector(`form`);
    $form.noValidate = true;
    $form.addEventListener(`submit`, handeSubmitForm);

    addValidationListeners(Array.from($form.elements));
    console.log('Bart is super');
  };

  init();
}
