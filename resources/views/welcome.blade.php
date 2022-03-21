    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <section class="m-4">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card text-center">
                        <div class="card-header  ">
                            <h1 class="text-bold-500 info">
                                Exchange cryptocurrency at the best rate
                            </h1>
                        </div>
                        <div class="card-subtitle py-2 mx-2">
                            <h5 class="text-bold-500">Transfer from one wallet to another within seconds. It's that
                                simple.</h5>
                        </div>
                        <div class="card-body mt-2 ">
                            <div class="">

                                <form action="{{ url('convert') }}" method="GET">
                                    @csrf
                                    <div class="row p-5 ">
                                        <div class="col-3 offset-md-2">
                                            <input type="number" class="form-control" name="amount" id=""
                                                value="{{ session('currentAmount') ? session('currentAmount') : '' }}">
                                            @error('amount')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <select type="text" class="form-control" name="from" id="">
                                                @forelse ($codes as $key => $code)
                                                    <option value="{{ $key }}">{{ $key }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('from')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <select type="text" class="form-control" name="to" id="">
                                                @forelse ($codes as $key => $code)
                                                    <option value="{{ $key }}">{{ $key }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('to')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger exchange my-2">
                                        <i class="la la-exchange font-medium-1"></i>
                                        <span class="font-medium-1"> Exchange </span>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card text-center">
                        <div class="card-header  ">

                        </div>
                        <div class="card-subtitle py-2 mx-2">

                        </div>
                        <div class="card-body mt-2 ">
                            <div class="">

                                <form action="">
                                    <div class="row p-5 ">
                                        <div class="col-3 offset-md-2">
                                            @if (session('from'))
                                                {{ session('from') }}
                                            @endif
                                        </div>
                                        <div class="col-2">
                                            @if (session('to'))
                                                {{ session('to') }}
                                            @endif
                                        </div>
                                        <div class="col-2">
                                            @if (session('amount'))
                                                <p class="bg-success">
                                                    {{ session('amount') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
    </body>

    </html>
