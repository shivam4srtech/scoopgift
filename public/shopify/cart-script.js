(function () {
    const form = document.querySelector('form[action="/cart"]');
    if (!form) return;

    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = 'Enter Gift Card Code';
    input.id = 'zoop-gift-card';
    input.style.marginRight = '10px';

    const button = document.createElement('button');
    button.innerText = 'Apply';
    button.onclick = async function (e) {
        e.preventDefault();
        const code = input.value;
        const shop = Shopify.shop;

        const res = await fetch('https://scoopgift.com/api/shopify/validate-gift-card', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer your_static_key_or_remove_if_unused'
            },
            body: JSON.stringify({ code, shop })
        });

        const data = await res.json();
        alert(data.valid ? `Gift Card Applied: ₹${data.amount}` : 'Invalid or Expired Gift Card');
    };

    const div = document.createElement('div');
    div.style.marginTop = '20px';
    div.appendChild(input);
    div.appendChild(button);

    form.appendChild(div);
})();
