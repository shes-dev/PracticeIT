<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../../v/loginAlert.php';
	include '../../../v/structure.php';	
	include '../questionFiles/009-012.php';	
	
	$middleDisplay = new middlePart2();
	$middleDisplay->displayContent();
	
	$question_index = substr(dirname(__DIR__), -2,2);
	$solution_index = substr(__FILE__, -5,1);
	
	$start_index = ($question_index - 10)*80 + ($solution_index - 1)*20;
	$end_index = $start_index + 10;
		
	$cardPageDisplay = new cardPage(0,$start_index+10,$end_index+10);
	$cardPageDisplay->displayContent();
	
	
/*	//SOLUTIONS
	$solutionDisplay = new solution($solution_array_01->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_02->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_03->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_04->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	//MIDDLE PART
	$middleDisplay = new middlePart();
	$middleDisplay->displayContent();
	
	//QUESTIONS
	//001 on page
	$questionDisplay = new question($solution_array_01->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//002 on page
	$questionDisplay = new question($solution_array_02->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//003 on page
	$questionDisplay = new question($solution_array_03->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//004 on page
	$questionDisplay = new question($solution_array_04->displaySolutionArray());
	$questionDisplay->displayContent();
	
	$listDisplay = new listBeforeFooter();
	$listDisplay->displayContent();
*/
?>
			


