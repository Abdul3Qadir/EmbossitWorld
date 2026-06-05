window.addEventListener('load', () => {
    const editBtn = document.getElementById('edit-billing-btn');
    const cancelBtn = document.getElementById('cancel-edit');
    const displayView = document.getElementById('billing-display-view');
    const editView = document.getElementById('billing-edit-view');
    const billingForm = document.getElementById('billing-form');

    if (editBtn) {
        editBtn.addEventListener('click', () => {
            const currentName = document.getElementById('display-name').textContent.split(' ');
            const currentStreet = document.getElementById('display-address').textContent;
            const currentPhone = document.getElementById('display-phone').textContent;
            const currentEmail = document.getElementById('display-email').textContent;

            document.getElementById('input-fname').value = currentName[0] || '';
            document.getElementById('input-lname').value = currentName.slice(1).join(' ') || '';
            document.getElementById('input-street').value = currentStreet;
            document.getElementById('input-phone').value = currentPhone;
            document.getElementById('input-email').value = currentEmail;

            displayView.classList.add('hidden');
            editView.classList.remove('hidden');
            editView.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            editView.classList.add('hidden');
            displayView.classList.remove('hidden');
        });
    }

    if (billingForm) {
        billingForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const data = {
                fname: document.getElementById('input-fname').value,
                lname: document.getElementById('input-lname').value,
                company: document.getElementById('input-company').value,
                country: document.getElementById('input-country').value,
                street: document.getElementById('input-street').value,
                city: document.getElementById('input-city').value,
                state: document.getElementById('input-state').value,
                zip: document.getElementById('input-postcode').value,
                phone: document.getElementById('input-phone').value,
                email: document.getElementById('input-email').value
            };

            document.getElementById('display-name').textContent = `${data.fname} ${data.lname}`;
            
            const companyEl = document.getElementById('display-company');
            companyEl.textContent = data.company || '';
            companyEl.style.display = data.company ? 'block' : 'none';

            document.getElementById('display-address').textContent = data.street;
            document.getElementById('display-location').textContent = `${data.city}, ${data.state} ${data.zip}`;
            document.getElementById('display-country').textContent = data.country;
            document.getElementById('display-phone').textContent = data.phone;
            document.getElementById('display-email').textContent = data.email;

            editView.classList.add('hidden');
            displayView.classList.remove('hidden');
        });
    }
});