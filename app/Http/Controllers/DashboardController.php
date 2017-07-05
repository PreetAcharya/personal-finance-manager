<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Debit;
use App\Credit;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $sum_credits = Credit::selectRaw('sum(creditAmount) as creditsum')->where('creditUserId','=',Auth::user()->getUserId())-> get();
        $sum_debits = Debit::selectRaw('sum(debitAmount) as debitsum')->where('debitUserId','=',Auth::user()->getUserId())-> get();
        return view('pages.dashboard',compact('sum_credits','sum_debits'));
    }

    public function debit()
    {
        $categories = Category::where('categoryType', '=', 'debit')->get();
        //$categories = Category::all();
        return view('pages.debit', ['categories' => $categories]);
    }

    public function credit()
    {
        $categories = Category::where('categoryType', '=', 'credit')->get();
        //$categories = Category::all();
        return view('pages.credit', ['categories' => $categories]);
    }

    public function creditgrid()
    {
        $credits = Credit::join('categories', 'categories.categoryId', '=', 'credits.creditCategoryId')->where('credits.creditUserId','=',Auth::user()->getUserId())-> get();
        return view('pages.creditgrid')->with('credits',$credits);
    }
    public function debitgrid()
    {
        $debits = Debit::join('categories', 'categories.categoryId', '=', 'debits.debitCategoryId')->where('debits.debitUserId','=',Auth::user()->getUserId())-> get();
        return view('pages.debitgrid')->with('debits',$debits);
    }

    public function addDebit(Request $request)
    {

        //dd($request);
        $this->validate($request,
            [
                'debitAmount' => 'required|numeric',
                'debitName' => 'required',
                'debitCategoryId' => 'required|integer',
                'debitUserId' => 'required',
                'debitDate' => 'required'
            ]
        );

        $debit =  new Debit;
        $debit->debitAmount = $request->debitAmount;
        $debit->debitName =$request->debitName;
        $debit->debitCategoryId = $request->debitCategoryId;
        $debit->debitUserId = $request->debitUserId;
        $debit->debitDate = $request->debitDate;

        $debit->save();

        return Redirect('debitgrid');
    }

    public function addCredit(Request $request)
    {

        //dd($request);
        $this->validate($request,
            [
                'creditAmount' => 'required|numeric',
                'creditName' => 'required',
                'creditCategoryId' => 'required|integer',
                'creditUserId' => 'required',
                'creditDate' => 'required'
            ]
        );

        $credit =  new Credit;
        $credit->creditAmount = $request->creditAmount;
        $credit->creditName =$request->creditName;
        $credit->creditCategoryId = $request->creditCategoryId;
        $credit->creditUserId = $request->creditUserId;
        $credit->creditDate = $request->creditDate;
        $credit->save();

        return Redirect('creditgrid');
    }

    public function editcredit($creditId)
    {
        $credit= Credit::find($creditId);
        $categories = Category::where('categoryType', '=', 'credit')->get();
        return view('pages.editcredit',compact('credit','categories'));
    }

    public function editcreditdata(Request $request, $creditId)
    {
        $this->validate($request,
            [
                'creditAmount' => 'required|numeric',
                'creditName' => 'required',
                'creditCategoryId' => 'required|integer',
                'creditUserId' => 'required',
                'creditDate' => 'required'
            ]
        );

        $inputs = $request->all();
        $credit = Credit::find($creditId);
        $credit->update($inputs);
        return redirect('creditgrid');
    }

    public function deletecredit($creditId)
    {
        Credit::find($creditId)->delete();
        return redirect('creditgrid');
    }

    public function editdebit($debitId)
    {
        $debit= Debit::find($debitId);
        $categories = Category::where('categoryType', '=', 'debit')->get();
        return view('pages.editdebit',compact('debit','categories'));
    }

    public function editdebitdata(Request $request, $debitId)
    {
        $this->validate($request,
            [
                'debitAmount' => 'required|numeric',
                'debitName' => 'required',
                'debitCategoryId' => 'required|integer',
                'debitUserId' => 'required',
                'debitDate' => 'required'
            ]
        );

        $inputs = $request->all();
        $debit = Debit::find($debitId);
        $debit->update($inputs);
        return redirect('debitgrid');
    }

    public function deletedebit($debitId)
    {
        Debit::find($debitId)->delete();
        return redirect('debitgrid');
    }

    public function charts()
    {
        $cr =  Category::selectRaw('categories.categoryName as categoryName,sum(credits.creditAmount) as creditAmount')
            ->join('credits', 'categories.categoryId', '=', 'credits.creditCategoryId','left outer')
            ->where('credits.creditUserId','=',Auth::user()->getUserId())
            ->groupBy('categories.categoryName')
            ->get()->toArray();
        $cr_categories = array_column($cr, 'categoryName');
        $cr_categories = json_encode($cr_categories);
        $cr_amount = array_column($cr,'creditAmount');
        $cr_amount = json_encode($cr_amount,JSON_NUMERIC_CHECK);

        return view('pages.charts',compact('cr_categories','cr_amount'));

    }

    public function debitcharts()
    {
        $dbt =  Category::selectRaw('categories.categoryName as categoryName,sum(debits.debitAmount) as debitAmount')
            ->join('debits', 'categories.categoryId', '=', 'debits.debitCategoryId','left outer')
            ->where('debits.debitUserId','=',Auth::user()->getUserId())
            ->groupBy('categories.categoryName')
            ->get()->toArray();
        $dbt_categories = array_column($dbt, 'categoryName');
        $dbt_categories = json_encode($dbt_categories);
        $dbt_amount = array_column($dbt,'debitAmount');
        $dbt_amount = json_encode($dbt_amount,JSON_NUMERIC_CHECK);

        return view('pages.debitcharts',compact('dbt_categories','dbt_amount'));

    }


}
