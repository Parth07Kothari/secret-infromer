from django.db import models
from django.utils import timezone

# Create your models here.

class Info(models.Model):
        msg = models.TextField()
        files = models.FileField(upload_to='', null=True)
        date_post = models.DateTimeField(default=timezone.now)

        def __str__(self):
            return self.msg
