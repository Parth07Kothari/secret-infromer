# Generated by Django 3.2.8 on 2021-10-21 09:55

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('anonymous', '0004_alter_info_files'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='info',
            name='phone',
        ),
    ]
