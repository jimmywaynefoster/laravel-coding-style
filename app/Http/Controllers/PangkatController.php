<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Score;
use App\Models\PositionScore;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function index()
    {
        $no = 1;
        $employees = PositionScore::with('employee.position', 'employee.level','score')
                    ->paginate(10);
        return view('pangkat.index', compact('no', 'employees'));
    }

    public function create()
    {
        $employees   = Employee::all();
        $scores      = Score::all();

        return view('pangkat.create', compact('employees', 'scores'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'year'      => 'required',
            'employee'  => 'required',
            'score'     => 'required'
        ]);

        $pangkat                = new PositionScore;
        $pangkat->year          = $request->year;
        $pangkat->employee_id   = $request->employee;
        $pangkat->score_id      = $request->score;
        $pangkat->save();

        $score = Employee::with('positionScore.score')
                ->find($pangkat->employee_id);

        $check = $score->positionScore->sum('score.value');
        if ($check == 6) {
            return redirect()->route('pangkat.home')->with(['success'=>'pegawai naik pangkat']);
        } else {
            return redirect()->route('pangkat.home')->with(['success'=>'data berhasil di tambahkan']);
        }
    }
}
