#清理备份文件，保留最新的7个文件
1 4 * * * find /data/backups-gitlab -mtime +7 -delete