<?php

use Illuminate\Support\Facades\Route;
use Filament\Notifications\Notification;


Route::get('/', function () {
    return redirect('/admin');
});


Route::get('/backup', function () {
    // Database configuration
    $dbHost = env("DB_HOST");
    $dbUser = env("DB_USERNAME");
    $dbPass = env("DB_PASSWORD");
    $dbName = env("DB_DATABASE");

    $backupDirectory = '';
    $backupFileName = 'zamzam.sql';
    $backupFilePath = $backupDirectory . $backupFileName;

    // Command to create a backup using mysqldump
    $command = "mysqldump --user={$dbUser} --password={$dbPass} --host={$dbHost} {$dbName} > {$backupFilePath}";

    // Execute the command
    exec($command, $output, $returnCode);

    if ($returnCode == 0) {
        Notification::make()
            ->title('Backup Successfully Created')
            ->icon('heroicon-o-circle-stack')
            ->iconColor('success')
            ->send();
        return response()->download($backupFilePath, $backupFileName, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $backupFileName . '"'
        ]);
    } else {
        Notification::make()
            ->title('Something unexpected happened.')
            ->icon('heroicon-o-circle-stack')
            ->iconColor('danger')
            ->send();
        return redirect()->back();
    }
});
