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
    .box {
      width: 90%;
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