<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #303030;
    }

    .box {
        width: 80%;
        padding: 20px;
        background-color: #303030;
        border: 0;
        border-radius: 5px;
        margin-top: 25px;
        box-sizing: border-box;
        margin: 0 auto;
    }

    td {
        padding-right: 2%;
    }

    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        /* Force table to not be like tables anymore */
        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .box {
            width: 90%;
        }

        td {
            /* Behave  like a "row" */
            position: relative;
            padding-left: 50% !important;
        }


        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45% !important;
            padding-right: 10px !important;
        }


        td:nth-of-type(1):before {
            border-right: 2px solid black;
            content: "#";
            font-weight: bold;
        }

        td:nth-of-type(2):before {
            border-right: 2px solid black;
            content: "問題";
            font-weight: bold;
        }

        td:nth-of-type(3):before {
            border-right: 2px solid black;
            content: "類別";
            font-weight: bold;
        }

        td:nth-of-type(4):before {
            border-right: 2px solid black;
            content: "選項";
            font-weight: bold;
        }

        td:nth-of-type(5):before {
            border-right: 2px solid black;
            content: "刪除";
            font-weight: bold;
        }

    }

    @media screen and (max-width: 420px) {
        li.paginate_button.previous {
            display: inline;
        }

        li.paginate_button.next {
            display: inline;
        }

        li.paginate_button {
            display: none;
        }
    }
</style>