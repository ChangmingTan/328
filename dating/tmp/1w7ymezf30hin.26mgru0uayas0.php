<?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
<div class="card container">
    <div class="card-body">
        <div id="summary" class="row">
            <div class="col-lg-6">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <?= ($SESSION['pInfo']->getFname()) ?> <?= ($SESSION['pInfo']->getLname())."
" ?>
                        </li>

                        <?php if (!empty($SESSION['pInfo']->getGender())): ?>
                            <li class="list-group-item">Gender: <?= ($SESSION['pInfo']->getGender()) ?></li>
                        <?php endif; ?>

                        <li class="list-group-item">Age: <?= ($SESSION['pInfo']->getAge()) ?></li>
                        <li class="list-group-item">Phone: <?= ($SESSION['pInfo']->getPhone()) ?></li>
                        <li class="list-group-item">Email: <?= ($SESSION['pInfo']->getEmail()) ?></li>
                        <li class="list-group-item">State: <?= ($SESSION['pInfo']->getState()) ?></li>

                        <?php if (!empty($SESSION['pInfo']->getSeeking())): ?>
                            <li class="list-group-item">Seeking: <?= ($SESSION['pInfo']->getSeeking()) ?></li>
                        <?php endif; ?>

                        <?php if ($SESSION['pInfo'] instanceof PremiumMember && (!empty($SESSION['pInfo']->getInDoorInterests()) || !empty($SESSION['pInfo']->getOutDoorInterests()))): ?>
                            <li class="list-group-item">Interests:
                                <?php if (!empty($SESSION['pInfo']->getInDoorInterests())): ?><?= (implode($SESSION['pInfo']->getInDoorInterests(), ", "))."
" ?>
                                    <?php if (!empty($SESSION['pInfo']->getOutDoorInterests())): ?>,<?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($SESSION['pInfo']->getOutDoorInterests())): ?><?= (implode($SESSION['pInfo']->getOutDoorInterests(), ", "))."
" ?>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="user" width="350"
                     height="350">



                <?php if (!empty($SESSION['pInfo']->getBio())): ?>
                    <div class="text-left p-3">
                        <h3>Biography</h3>
                        <p><?= ($SESSION['pInfo']->getBio()) ?></p>
                    </div>
                <?php endif; ?>

            </div>

        </div>

        <div class="text-center p-2">
            <a class="btn btn-primary text-white" href="">Contact Me!</a>
        </div>

    </div>
</div>