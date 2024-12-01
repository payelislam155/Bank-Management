 const serviceLink = document.querySelector('nav ul li.relative');
        const dropdownMenu = serviceLink.querySelector('ul');

        serviceLink.querySelector('a').addEventListener('click', (e) => {
            e.preventDefault();
            dropdownMenu.classList.toggle('hidden'); 
        });
        
        document.addEventListener('click', (e) => {
            if (!serviceLink.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });