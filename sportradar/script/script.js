

    const newteam = (team)=>{

        $('#main').html(`  
            <div class="border shadow text-center text-success p-5">
                <h3 class="p-5">`+team+` team has been inserted.</h3>
            </div>
        `);
        setTimeout(() => { window.location = '../index.php'; }, 2000);
    }

    const newEvent = ()=>{

        $('#main').html(`  
            <div class="border shadow text-center text-success p-5">
                <h3 class="p-5">The match has been created.</h3>
            </div>
        `);
        setTimeout(() => { window.location = '../index.php'; }, 2000);
    }

    const error = ()=>{

        $('#main').html(`  
            <div class="border shadow text-center text-danger p-5">
                <h3 class="p-5">An error has occurred please try again.</h3>
            </div>
        `);
        setTimeout(() => { window.location = '../index.php'; }, 2000);
    }
    
    const page404 = ()=>{

        $('#main').html(`  
            <div class="border shadow text-center text-info p-5">
                <h1>404</h1>
                <h3 class="p-5">This page doesn't exist :(</h3>
            </div>
        `);
    }
