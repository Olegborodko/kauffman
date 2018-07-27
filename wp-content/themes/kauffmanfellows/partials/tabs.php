<div class="row margin-top15">
     <h1>Fellows - Directory</h1>

    <div class="button-group filters-button-group col-md-12">
        <?php ksort($countryList); ?>
        <button class=" col-md-2 " data-filter="*">ALL</button>
        <?php foreach ($countryList as $key => $continent ):?>
            <button class=" col-md-2 <?php echo  $key; ?>" data-filter=".<?php echo  str_replace(' ', '-', strtolower($key)); ?>"><?php echo  $key; ?></button>
        <?php endforeach; ?>
    </div>

    <div class="grid col-md-12">
        <?php foreach ($countryList as $key => $companys):?>
            <div class="element-item  <?php echo  str_replace(' ', '-', strtolower($key)); ?> col-md-3 " data-category="transition">
                <div class="country">
                    <?php ksort($companys) ?>
                    <?php foreach($companys as $key => $companysName):?>
                        <h5 class="name"><?php echo $key?></h5>
                        <ul>
                            <?php asort($companysName) ?>
                            <?php foreach($companysName as  $name):?>
                                <li><?php echo $name?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach;?>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
    <script>
        // external js: isotope.pkgd.js

        // init Isotope
        var iso = new Isotope( '.grid', {
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });

        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function( itemElem ) {
                var number = itemElem.querySelector('.number').textContent;
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function( itemElem ) {
                var name = itemElem.querySelector('.name').textContent;
                return name.match( /ium$/ );
            }
        };

        // bind filter button click
        var filtersElem = document.querySelector('.filters-button-group');
        filtersElem.addEventListener( 'click', function( event ) {
            // only work with buttons
            if ( !matchesSelector( event.target, 'button' ) ) {
                return;
            }
            var filterValue = event.target.getAttribute('data-filter');
            // use matching filter function
            filterValue = filterFns[ filterValue ] || filterValue;
            iso.arrange({ filter: filterValue });
        });

        // change is-checked class on buttons
        var buttonGroups = document.querySelectorAll('.button-group');
        for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
            var buttonGroup = buttonGroups[i];
            radioButtonGroup( buttonGroup );
        }

        function radioButtonGroup( buttonGroup ) {
            buttonGroup.addEventListener( 'click', function( event ) {
                // only work with buttons
                if ( !matchesSelector( event.target, 'button' ) ) {
                    return;
                }
                buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
                event.target.classList.add('is-checked');
            });
        }
    </script>
</div>