<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="bg-body rounded px-4 py-2 mt-2 shadow-sm">
            <p class="fs-1 mb-0"><?= $city ?></p>
            <p>
                <?= ($province != '') ? 'Province: ' . $province . '<br>' : ''?>
                Lat: <?= $data['lat'] ?> | Long: <?= $data['lon'] ?> <br>
            </p>
            <table>
                <th>
                    <td>
                        <img src="https://www.weatherbit.io/static/img/icons/<?= $weather['icon'] ?>.png" alt="<?= $weather['description'] ?>">
                    </td>
                    <td class="text-capitalize">
                        <p class="fs-1 mb-0"><?= $temp ?>°C</p>
                        <?= $weather['description'] ?>
                    </td>
                </th>
            </table>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="row p-0">
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0">
                        <i class="fas fa-wind" data-bs-toggle="tooltip" data-bs-placement="top" title="Wind speed"></i>
                        <?= number_format($wind_spd, 1) ?>m/s
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Wind Speed
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0">
                        <i class="fas fa-thermometer-half" data-bs-toggle="tooltip" data-bs-placement="top" title="Clouds"></i>
                        <?= $app_temp ?>°C
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Feels like
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0">
                    <i class="fas fa-sun" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunrise"></i>
                        <?= date("g:i A", strtotime($sunrise) + 28800) ?>
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Sunrise
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row p-0">
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0 text-capitalize">
                        <i class="fas fa-compass" data-bs-toggle="tooltip" data-bs-placement="top" title="Wind speed"></i>
                        <?= $wind_cdir ?>
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Wind Direction
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0">
                        <i class="fas fa-cloud" data-bs-toggle="tooltip" data-bs-placement="top" title="Clouds"></i>
                        <?= $clouds ?>%
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Clouds
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="p-3 mt-2 bg-body rounded shadow-sm">
                    <p class="text-center fs-4 pt-2 mb-0">
                    <i class="fas fa-moon" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunrise"></i>
                        <?= date("g:i A", strtotime($sunset) + 28800) ?>
                    </p>
                    <p class="w-100 text-center text-uppercase desc text-info">
                        Sunset
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>