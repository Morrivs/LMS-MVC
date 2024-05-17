<?php require_once "../views/dashboard/layouts/open.php" ?>

<style>

    .cards-container{
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .card{
        width: calc((100% - 40px) /3);
        margin-bottom: 20px;
        height: 115px;
        background-color: #fff;
        border: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .card .icon{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        font-size: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f4f7ff;
        color: #4e84fa;
        border: 1px solid #eee;
    }

    .card .text .number{
        font-size: 38px;
        display: block;
        font-weight: 600;
    }

    .card .text .label{
        display: block;
        font-size: 16px;
        margin-top: 8px;
        font-weight: 500;
        color: #696969;
    }

    .card:hover .label{
        color: #4169e1;
    }

    @media screen and (max-width:1140px) {
        .card{
            width: calc((100%-20px)/2);
        }
    }

    @media screen and (max-width:720px) {
        .card{
            width: 100%;
        }
    }
</style>

<h3 class="title">Dashboard</h3>

<div class="cards-container">
    <div class="card">
        <div>
            <div class="icon">
                <i class="fa-solid fa-book-open"></i>
            </div>
            <div class="text">
                <span class="number">19</span>
                <span class="label">Enrolle Course</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="icon" style="color:#ffc221; background-color: #fffcf2;">
                <i class="fa-solid fa-photo-film"></i>
            </div>
            <div class="text">
                <span class="number">19</span>
                <span class="label">Active Course</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="icon">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div class="text">
                <span class="number">19</span>
                <span class="label">Complete Course</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="icon">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="text">
                <span class="number">19</span>
                <span class="label">Total students</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="icon">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <div class="text">
                <span class="number">19</span>
                <span class="label">Total Course</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="icon">
                <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <div class="text">
                <span class="number">$900<small>.09</small></span>
                <span class="label">Total Earnings</span>
            </div>
        </div>
    </div>
</div>

<?php require_once "../views/dashboard/layouts/close.php" ?>